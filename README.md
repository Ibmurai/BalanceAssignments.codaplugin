BalanceAssignments.codaplugin - A [Coda](http://www.panic.com/coda) plug-in for formatting multiple assignments.
===================================================================================================================

What it does
------------

The following examples are PHP, but the plug-in should work with any language.

It aligns assignments, so that code like this:

    $something = new Something();
    $something->beverage = 'coffee';
    $something->horse = ShetlandPony::getInstance();
    $something->answer = 42;

Becomes nice and pretty, like this:

    $something           = new Something();
    $something->beverage = 'coffee';
    $something->horse    = ShetlandPony::getInstance();
    $something->answer   = 42;

It works with hashed arrays, too, so this:

    $arr = array(
        'answer' => 42,
        'salmon' => 'yummy',
        'spaghetti' => Spaghetti::with(Bolognese::getInstance()),
        'a' => 'b',
    );

Becomes this:

    $arr = array(
        'answer'    => 42,
        'salmon'    => 'yummy',
        'spaghetti' => Spaghetti::with(Bolognese::getInstance()),
        'a'         => 'b',
    );
    
Usage
-----

 *  Select the code you want to balance.
 *  Press CTRL+ALT+CMD+B

Requirements
------------

 *  Coda version 1.6

Installation
------------

### Using git

This is the preferred method.

    cd ~/Library/Application\ Support/Coda/Plug-ins
    git clone git@github.com:Ibmurai/BalanceAssignments.codaplugin.git

If Coda is running, you will need to quit and relaunch it.

### Without git

 *  Download from github
 *  Move contents of package to `~/Library/Application Support/Coda/Plug-ins/BalanceAssignments.codaplugin`

If Coda is running, you will need to quit and relaunch it.
