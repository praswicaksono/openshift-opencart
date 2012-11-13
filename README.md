OpenCart on OpenShift
====================

This git repository helps you get up and running quickly w/ a OpenCart installation
on OpenShift.  The backend database is MySQL and the database name is the 
same as your application name (using $_ENV['OPENSHIFT_APP_NAME']).  You can call
your application by whatever name you want (the name of the database will always
match the application).


Running on OpenShift
----------------------------

Create an account at http://openshift.redhat.com/

Create a php-5.3 application (you can call your application whatever you want)

    rhc app create -a opencart -t php-5.3

Add MySQL support to your application

    rhc app cartridge add -a opencart -c mysql-5.1

Add this upstream opencart repo

    cd opencart
    git remote add upstream -m master git://github.com/Atriedes/openshift-opencart.git
    git pull -s recursive -X theirs upstream master
    # note that the git pull above can be used later to pull updates to OpenCarts
    
Then push the repo upstream

    git push

Additional Info
----------------------------
Complete web installation, all database settings are set using OpenShift environment
