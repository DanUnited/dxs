<script src="/js/snap.svg-min.js"></script>
    <object type="image/svg+xml" data="/img/tree.svg" id="canvas"></object>
<script>
    'use strict';
    window.onload = function() {
        var s = Snap("#canvas");
        s.selectAll('g').forEach(function(el){
           el.animate({background: '#000'},1000);
        });
    }
</script>