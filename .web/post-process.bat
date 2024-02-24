php post-process.php
xcopy .\.dev\divengine.png .\public\divengine.png /y
cd ..
git add --all
git commit -m "update"
git push origin master


