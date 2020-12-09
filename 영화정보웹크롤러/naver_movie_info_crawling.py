# import
from bs4 import BeautifulSoup
from urllib.request import urlopen

 
url = urlopen("https://movie.naver.com/movie/running/current.nhn")
bs = BeautifulSoup(url, 'html.parser')
body = bs.body

 
target = body.find(class_="lst_detail_t1")
list = target.find_all('li')
no = 1
dataset = []
for n in range(0, len(list)) :
    print("=================================")
    print("No.",no)
    # dataset[no-1][0]=no

    # 영화 제목
    title = list[n].find(class_="tit").find("a").text
    print("Title :\t", title)
    # dataset[no-1][1]=title

    # 개봉 날짜
    date = list[n].find(class_="info_txt1").find_all("dd")[0].text
    try:
        start = date.index('\t20')
    except ValueError:
        start = date.index('\t19')
        
    terminator = date.index('개봉')
    date = date[start+1:terminator]
    print("Date :\t", date)
    # dataset[no-1][2]=date

    # 영화 장르
    genre = list[n].find(class_="info_txt1").find_all("dd")[0].find("span").find_all("a")
    genre = [genre.text.strip().replace("'", "                ") for genre in genre]
    print("Genre :\t", genre)
    # dataset[no-1][3]=genre

    # 영화 평점
    point = list[n].find(class_="star").find("dl", class_="info_star").find("div", class_="star_t1").find_all("span")[2].text
    print("Point :\t", point)
    # dataset[no-1][4]=point
 
    # 감독
    try:
        director = list[n].find(class_="info_txt1").find_all("dd")[1].find("span").find_all("a")
        director = [director.text.strip().replace("'", "                ") for director in director]
        print("Director :\t", director)
        # dataset[no-1][5]=director

    except IndexError:
        print("Director :\t no information")
        # dataset[no-1][5]="no information"


    # 출연 배우
    try:
        cast = list[n].find(class_="lst_dsc").find("dl", class_="info_txt1").find_all("dd")[2].find(class_="link_txt").find_all("a")
        cast = [cast.text.strip().replace("'", "                ") for cast in cast]
        print("Cast :\t", cast)
        # dataset[no-1][6]=cast

    except IndexError:
        print("Cast :\t no information")
        # dataset[no-1][6]="no information"

    dataset.append([no,title,date,genre,point,director,cast])
    no += 1

# 작은따옴표 없애기
#for r in dataset:
    #for i in range(0,200) :
        #for j in range(1,6) :
            #dataset[i][j] = dataset[i][j].replace("'",'')


# 데이터셋 출력
print(dataset)



# db 저장
import pymysql

connect = pymysql.connect(host='localhost', user='root', password='min01038082726!',  port=3306, db='movie_info', charset='utf8mb4')
cursor = connect.cursor()

for r in dataset:
    no = int(r[0])
    title = str(r[1])
    date = str(r[2])
    #genre = str(r[3])
    point = str(r[4])
    #director = str(r[5])
    #cast = str(r[6])
    
    sql = "insert into sys.movie_info (no, title, date, point) values (%d, '%s', '%s', '%s')" % (no, title, date, point)

    cursor.execute(sql)
    connect.commit()
connect.close()
