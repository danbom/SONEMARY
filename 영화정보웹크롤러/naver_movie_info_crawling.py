# import
from bs4 import BeautifulSoup
from urllib.request import urlopen

 
url = urlopen("https://movie.naver.com/movie/running/current.nhn")
bs = BeautifulSoup(url, 'html.parser')
body = bs.body

 
target = body.find(class_="lst_detail_t1")
list = target.find_all('li')
no = 1
for n in range(0, len(list)) :
    print("=================================")
    print("No.",no)
    no += 1
    # 영화 제목
    title = list[n].find(class_="tit").find("a").text
    print("Title :\t", title)

    # 개봉 날짜
    date = list[n].find(class_="info_txt1").find_all("dd")[0].text
    start = date.index('20')
    terminator = date.index('개봉')
    print("Date :\t", date[start:terminator])

    # 영화 장르
    genre = list[n].find(class_="info_txt1").find_all("dd")[0].find("span").find_all("a")
    genreList = [genre.text.strip() for genre in genre]
    print("Genre :\t", genreList)

    # 영화 평점
    point = list[n].find(class_="star").find("dl", class_="info_star").find("div", class_="star_t1").find_all("span")[2].text
    print("Point :\t", point)
 
    # 감독
    try:
        director = list[n].find(class_="info_txt1").find_all("dd")[1].find("span").find_all("a")
        directorList = [director.text.strip() for director in director]
        print("Director :\t", directorList)
    except IndexError:
        print("Director :\t no information")


    # 출연 배우
    try:
        cast = list[n].find(class_="lst_dsc").find("dl", class_="info_txt1").find_all("dd")[2].find(class_="link_txt").find_all("a")
        castList = [cast.text.strip() for cast in cast]
        print("Actor :\t", castList)
    except IndexError:
        print("Actor :\t no information")
