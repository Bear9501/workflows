name: Get YouTube Live m3u8
on:
  schedule:
    - cron: "0 */2 * * *"
  workflow_dispatch:
jobs:
  build:
    runs-on: ubuntu-18.04
    steps:
    - name: Install youtube-dl
      run: |
        sudo curl -L https://yt-dl.org/downloads/latest/youtube-dl -o /usr/local/bin/youtube-dl
        sudo chmod a+rx /usr/local/bin/youtube-dl
    - name: Get wfutv.m3u8
      run: |
        touch ./wfutv.m3u8
        sudo cat >./wfutv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=HcPV1cUGiuY)
        EOL
    - name: Get sindatv.m3u8
      run: |
        touch ./sindatv.m3u8
        sudo cat >./sindatv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=TBHuOAky73I)
        EOL
    - name: Get ctitv.m3u8
      run: |
        touch ./ctitv.m3u8
        sudo cat >./ctitv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=PZrUU8lJKCU)
        EOL
    - name: Get ttvnews.m3u8
      run: |
        touch ./ttvnews.m3u8
        sudo cat >./ttvnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=xL0ch83RAK8)
        EOL
    - name: Get ftvnews.m3u8
      run: |
        touch ./ftvnews.m3u8
        sudo cat >./ftvnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=XGEmg3vhrzU)
        EOL
    - name: Get ctsnews.m3u8
      run: |
        touch ./ctsnews.m3u8
        sudo cat >./ctsnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=yUTy1U1wTwE)
        EOL
    - name: Get ctvnews.m3u8
      run: |
        touch ./ctvnews.m3u8
        sudo cat >./ctvnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=TCnaIE_SAtM)
        EOL
    - name: Get setlive.m3u8
      run: |
        touch ./setlive.m3u8
        sudo cat >./setlive.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=FoBfXvlOR6I)
        EOL
    - name: Get setinews.m3u8
      run: |
        touch ./setinews.m3u8
        sudo cat >./setinews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=CKjSm5ZeehE)
        EOL
    - name: Get ebcnews.m3u8
      run: |
        touch ./ebcnews.m3u8
        sudo cat >./ebcnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=R2iMq5LKXco)
        EOL
    - name: Get hyxw.m3u8
      run: |
        touch ./hyxw.m3u8
        sudo cat >./hyxw.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=Fpsi2cmXGMs)
        EOL
    - name: Get tvbsnews.m3u8
      run: |
        touch ./tvbsnews.m3u8
        sudo cat >./tvbsnews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=2mCSYvcfhtc)
        EOL
    - name: Get eftv.m3u8
      run: |
        touch ./eftv.m3u8
        sudo cat >./eftv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=7uZuEsKoV78)
        EOL
    - name: Get daai1.m3u8
      run: |
        touch ./daai1.m3u8
        sudo cat >./daai1.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=2560000
        $(youtube-dl -g https://www.youtube.com/watch?v=MIqUplvSRWA)
        EOL
    - name: Get daai2.m3u8
      run: |
        touch ./daai2.m3u8
        sudo cat >./daai2.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=2560000
        $(youtube-dl -g https://www.youtube.com/watch?v=DTNkEm6jaqQ)
        EOL
    - name: Get sdtv.m3u8
      run: |
        touch ./sdtv.m3u8
        sudo cat >./sdtv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=540000
        $(youtube-dl -g https://www.youtube.com/watch?v=foOEpZMBAAE)
        EOL
    - name: Get ctsshow.m3u8
      run: |
        touch ./ctsshow.m3u8
        sudo cat >./ctsshow.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=qvau9mKB0VQ)
        EOL
    - name: Get ctinews.m3u8
      run: |
        touch ./ctinews.m3u8
        sudo cat >./ctinews.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=2560000
        $(youtube-dl -g https://www.youtube.com/watch?v=lu_BJKxqGnk)
        EOL
    - name: Get parliamentarytv1.m3u8
      run: |
        touch ./parliamentarytv1.m3u8
        sudo cat >./parliamentarytv1.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=PQLMD4iHhG8)
        EOL
    - name: Get parliamentarytv2.m3u8
      run: |
        touch ./parliamentarytv2.m3u8
        sudo cat >./parliamentarytv2.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=RAP4h3q6_Sg)
        EOL
    - name: Get kpop.m3u8
      run: |
        touch ./kpop.m3u8
        sudo cat >./kpop.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=F4aby5WN1Rw)
        EOL
    - name: Get hitfm.m3u8
      run: |
        touch ./hitfm.m3u8
        sudo cat >./hitfm.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=Ptg8ErmPjxM)
        EOL
    - name: Get cpop.m3u8
      run: |
        touch ./cpop.m3u8
        sudo cat >./cpop.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=wrYF0HX7Kzc)
        EOL
    - name: Get 8fm.m3u8
      run: |
        touch ./8fm.m3u8
        sudo cat >./8fm.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=GOiCIPAtdHA)
        EOL
    - name: Get abcsing.m3u8
      run: |
        touch ./abcsing.m3u8
        sudo cat >./abcsing.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=GjWg196TWKM)
        EOL
    - name: Get KKBOX21.m3u8
      run: |
        touch ./KKBOX21.m3u8
        sudo cat >./KKBOX21.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=aO7_Ez58FuQ)
        EOL
    - name: Get sjtv.m3u8
      run: |
        touch ./sjtv.m3u8
        sudo cat >./sjtv.m3u8 <<EOL
        #EXTM3U
        #EXT-X-VERSION:3
        #EXT-X-STREAM-INF:PROGRAM-ID=1,BANDWIDTH=5400000
        $(youtube-dl -g https://www.youtube.com/watch?v=VD8dVG1DF1s)
        EOL
    - name : Upload artifact
      uses: actions/upload-artifact@master
      with:
        name: YTlive m3u8
        path: .
    - name: Git push assets to "YTlive" branch
      run: |
        git init
        git config --local user.name "actions"
        git config --local user.email "action@github.com"
        git checkout -b YTlive
        git add .
        git commit -m "Update YTlive"
        git remote add origin "https://${{ github.actor }}:${{ secrets.GITHUB_TOKEN }}@github.com/${{ github.repository }}"
        git push -f -u origin YTlive
