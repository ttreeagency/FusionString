# Neos Fusion String

This package provide some Fusion prototypes and helpers to manage strings.

Ttree.FusionString:Template
---------------------------

Minimalistic string based templates.

Include the prototype in your own Fusion scripts:

    include: resource://Ttree.FusionString/Private/Fusion/Template.fusion
    
    prototype(You.Package:String) < prototype(Ttree.FusionString:Template) {
        source = 'Hello {name}'
        values = {
            name = 'World'
        }
    }
    
Acknowledgments
---------------

Development sponsored by [ttree ltd - neos solution provider](http://ttree.ch).

We try our best to craft this package with a lots of love, we are open to
sponsoring, support request, ... just contact us.

License
-------

Licensed under MIT, see [LICENSE](LICENSE)
