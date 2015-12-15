#!/bin/bash

cd ~
cd ../..
cd /PATH_to_your_Directory/

SRCDIR="Folder_PATH"
DESTDIR="Destination_PATH"
FILENAME=cashin-$(date +%-Y%-m%-d)-$(date +%-T).tgz

tar -czpf $DESTDIR$FILENAME $SRCDIR
forever stop app.js

git pull https://username:password@bitbucket.org/repo.git

forever start app.js
