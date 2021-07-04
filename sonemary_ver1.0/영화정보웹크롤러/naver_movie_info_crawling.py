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
    genrelist = list[n].find(class_="info_txt1").find_all("dd")[0].find("span").find_all("a")
    genrelist = [genrelist.text.strip().replace("'", " & ") for genrelist in genrelist]
    a = ""
    genre = a.join(genrelist)
    print("Genre :\t", genre)
    # dataset[no-1][3]=genre

    # 영화 평점
    point = list[n].find(class_="star").find("dl", class_="info_star").find("div", class_="star_t1").find_all("span")[2].text
    print("Point :\t", point)
    # dataset[no-1][4]=point
 
    # 감독
    try:
        directorlist = list[n].find(class_="info_txt1").find_all("dd")[1].find("span").find_all("a")
        directorlist = [directorlist.text.strip().replace("'", " & ") for directorlist in directorlist]
        a = ""
        director = a.join(directorlist)
        print("Director :\t", director)
        # dataset[no-1][5]=director

    except IndexError:
        print("Director :\t no information")
        # dataset[no-1][5]="no information"


    # 출연 배우
    try:
        castlist = list[n].find(class_="lst_dsc").find("dl", class_="info_txt1").find_all("dd")[2].find(class_="link_txt").find_all("a")
        castlist = [castlist.text.strip().replace("'", " & ") for castlist in castlist]
        a=""
        cast=a.join(castlist)
        print("Cast :\t", cast)
        # dataset[no-1][6]=cast

    except IndexError:
        print("Cast :\t no information")
        # dataset[no-1][6]="no information"

    dataset.append([no,title,date,genre,point,director,cast])
    no += 1

# db 저장
import pymysql

connect = pymysql.connect(host='localhost', user='root', password='min01038082726!',  port=3306, db='movie_info', charset='utf8mb4')
cursor = connect.cursor()

for r in dataset:
    no = int(r[0])
    title = str(r[1])
    date = str(r[2])
    genre = str(r[3])
    point = str(r[4])
    director = str(r[5])
    cast = str(r[6])
    
    sql = "insert into sys.info (no, title, date, genre, point, director, cast) values (%d, '%s', '%s', '%s', '%s', '%s', '%s')" % (no, title, date, genre, point, director, cast)

    cursor.execute(sql)
    connect.commit()
connect.close()


