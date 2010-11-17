# Read Me for the EFCONG Website

Add more content here when you make features. Explain them this way:

    ## <feature name>
    
    explanation of how it works
    
        (4 spaces) for styled code

# Features

## Page Editing
	
After logging in, an "edit" link will appear next to page titles. Clicking it will allow the user to edit the page online. Things added should be formatted with html. This may be replaced before the end of the project, but also potentially not.

# Git Workflow

Don't work in `master`. Ever. All work should be branched off of `develop`, into a "feature branch" titled like `feature/<name>`. So, if you are going to make a navigation change, you would make a new branch (from `develop`) called `feature/nav`. Once a feature is done, it should be merged back in develop. This should be done with the `--no-ff` option to keep nice clean history. Once a feature has been merged, its branch should be deleted. The workflow is something like this:
  
    # on master
    
    $ git checkout develop
    $ git checkout feature/nav
    
    # do work son
    
    $ git add .                     # stage and
    $ git commit -m "useful"        # commit changes
    
    # now we're done with this feature
    
    $ git checkout develop
    $ git merge --no-ff feature/nav
    $ git branch -d feature/nav
    
If a feature is in progress but needs to be shared, don't merge to develop early, push the branch to github. This can be done like so:

    # on feature/nav
    
    $ git push origin feature/nav
    
Once you're done with a feature that has a branch on github, you can do this to remove it:

    $ git push origin :feature/new
    
A similar workflow is detailed in depth (with pictures): [A successful git branching model](http://nvie.com/posts/a-successful-git-branching-model/?).