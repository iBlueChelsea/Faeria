(this["webpackJsonpdeckbuilder-react"]=this["webpackJsonpdeckbuilder-react"]||[]).push([[0],{54:function(e,a,s){},74:function(e,a,s){},81:function(e,a,s){"use strict";s.r(a);var t=s(0),c=s.n(t),r=s(24),i=s.n(r),n=(s(54),s(11)),d=s(23),l=s(48),o=s(19),j=s.n(o),u=s(49),g=s(85),h=s(2),p=function(e){return e.data?Object(h.jsxs)(u.a,{action:!0,variant:"primary",id:e.id,onClick:e.click,children:[Object(h.jsx)(g.a,{pill:!0,variant:"primary",children:e.data.faeria})," ",e.data.name," ",Object(h.jsxs)(g.a,{variant:"secondary",children:["x",e.count]})]}):Object(h.jsx)(u.a,{})},b=s(88),f=function(e){var a=e.cardlist.map((function(a){return Object(h.jsx)(p,{id:a[0],count:a.length,data:e.data.filter((function(e){return e.id==a[0]}))[0],click:e.click},a[0])}));return Object(h.jsx)(b.a,{children:a})},m={0:"assets/images/cards/cheeksplore.jpg",1:"assets/images/cards/mercheek.jpg",2:"assets/images/cards/dolphin_cheekrider.jpg",3:"assets/images/cards/clamcheek.jpg",4:"assets/images/cards/ninjacheek.jpg",5:"assets/images/cards/song_of_the_mercheek.jpg",6:"assets/images/cards/cheek_in_a_bottle.jpg",7:"assets/images/cards/cheekie_in_a_lamp.jpg",8:"assets/images/cards/cheeklord.jpg",9:"assets/images/cards/rain_of_cheek.jpg",10:"assets/images/cards/cheekdrop.jpg",11:"assets/images/cards/cheekmoon.jpg",12:"assets/images/cards/cheekpearl.jpg",13:"assets/images/cards/crabcheek.jpg",14:"assets/images/cards/cheekcano.jpg",15:"assets/images/cards/cheekdevil.jpg",16:"assets/images/cards/cheekflame.jpg",17:"assets/images/cards/cheekblast.jpg",18:"assets/images/cards/cheekflame_faerie.jpg",19:"assets/images/cards/baby_cheekdevil.jpg",20:"assets/images/cards/ghostcheek_tower.jpg",21:"assets/images/cards/ghostcheek.jpg",22:"assets/images/cards/ghostcheek_alchemist.jpg",23:"assets/images/cards/cheekruption.jpg",24:"assets/images/cards/suncheek.jpg",25:"assets/images/cards/cheekflower.jpg",26:"assets/images/cards/cavecheek_dweller.jpg",27:"assets/images/cards/mushroom_cheek.jpg",28:"assets/images/cards/cheekshrooms.jpg",29:"assets/images/cards/cheektree_giant.jpg",30:"assets/images/cards/cheekworld_tree.jpg",31:"assets/images/cards/cheek_shaman.jpg",32:"assets/images/cards/cheekfox.jpg",33:"assets/images/cards/cheekbloom_spirit.jpg",34:"assets/images/cards/cheekshield_spirit.jpg",35:"assets/images/cards/cheek_dancers.jpg"},k=(s(74),function(e){var a=e.data.playable?"selectable":"not-selectable",s=e.data.playable?e.click:null;return Object(h.jsx)("div",{style:{width:"15vw"},id:e.data.id,onClick:s,className:a,children:Object(h.jsx)("img",{style:{width:"15vw"},id:e.data.id,alt:e.data.id,src:m[e.data.id]})})}),v=s(43),O=s(47),x=s(86),y=s(89),w=s(87),_=function(e){var a=Object(t.useState)([]),s=Object(n.a)(a,2),c=s[0],r=s[1],i=Object(t.useState)(e.data),o=Object(n.a)(i,2),u=o[0],p=o[1];Object(t.useEffect)((function(){j.a.get("/faeria/Faeria/utils/getCards.php").then((function(e){e.data.forEach((function(e){var a=b.find((function(a){return a.includes(parseInt(e.id))}));"1"===e.legendary?!a||a.length<1?e.playable=!0:e.playable=!1:!a||a.length<3?e.playable=!0:e.playable=!1})),r(e.data)})).catch((function(e){console.log("Network Error",e.message)}))}),[]),Object(t.useEffect)((function(){var e=Object(l.a)(c);e.forEach((function(e){var a=b.find((function(a){return a.includes(parseInt(e.id))}));"1"===e.legendary?!a||a.length<1?e.playable=!0:e.playable=!1:!a||a.length<3?e.playable=!0:e.playable=!1})),r(e)}),[u]);var b=u.cards.reduce((function(e,a,s,t){return a===t[s-1]?e[e.length-1].push(a):e.push([a]),e}),[]),m=function(e){var a=0,s=0;return e.forEach((function(e){s++,a+=parseInt(c.filter((function(a){return a.id==e}))[0].faeria)})),s?a/s:0},_=function(e){var a=Object(d.a)({},u);a.cards.push(parseInt(e.target.id)),a.cards.sort((function(e,a){return e-a})),a.cost=m(a.cards),p(a)},C=c.map((function(e,a){return Object(h.jsx)(k,{click:_,data:e},e.id)})),S=30===u.cards.length?Object(h.jsx)(v.a,{onClick:function(){var a=new FormData;a.append("user",document.getElementById("user").value),a.append("deck",JSON.stringify(u)),j.a.post("/faeria/Faeria/utils/saveDeck.php",a).then((function(){e.click()})).catch((function(e){console.log("Network Error",e.message)}))},variant:"primary",size:"lg",children:"Save"}):Object(h.jsx)(v.a,{disabled:!0,variant:"secondary",size:"lg",children:"Save"}),E=function(e){var a=Object(d.a)({},u);a.deck_name=e.target.value,p(a)},N=function(e){var a=Object(d.a)({},u);a.cover=e.target.id,p(a)},I=c.length>0?c.find((function(e){return e.id==u.cover}))?c.find((function(e){return e.id==u.cover})).name:"No cover":null,F=I?b.map((function(e){return Object(h.jsx)(O.a.Item,{id:e[0],onClick:N,children:c.find((function(a){return a.id==e[0]})).name},e[0])})):null;return Object(h.jsxs)("div",{style:{display:"flex"},children:[Object(h.jsx)("div",{style:{display:"flex",flexWrap:"wrap",height:"80vh",width:"70vw",justifyContent:"space-evenly",overflow:"scroll"},children:C}),Object(h.jsxs)("div",{style:{display:"flex",flexDirection:"column",width:"30vw",height:"100vh",justifyContent:"flex-start",overflow:"scroll"},children:[Object(h.jsxs)(x.a,{children:[Object(h.jsxs)(x.a.Prepend,{children:[Object(h.jsx)(x.a.Text,{children:Object(h.jsx)(g.a,{pill:!0,variant:"primary",children:parseFloat(u.cost).toFixed(1)})}),Object(h.jsxs)(x.a.Text,{children:[u.cards.length,"/30"]}),Object(h.jsx)(x.a.Text,{id:"basic-addon1",children:"Name:"})]}),Object(h.jsx)(y.a,{onChange:E,placeholder:u.deck_name,"aria-label":u.deck_name,"aria-describedby":"basic-addon1"})]}),Object(h.jsxs)(x.a,{children:[Object(h.jsx)(x.a.Prepend,{children:Object(h.jsx)(x.a.Text,{id:"basic-addon2",children:"Cover:"})}),Object(h.jsx)(y.a,{onChange:E,readOnly:!0,defaultValue:I,"aria-label":I,"aria-describedby":"basic-addon2"}),Object(h.jsx)(w.a,{as:x.a.Append,variant:"secondary",title:"Select",id:"input-group-dropdown-2",children:F})]}),Object(h.jsx)(f,{cardlist:b,data:c,click:function(e){var a=Object(d.a)({},u);a.cards.splice(a.cards.findIndex((function(a){return a==e.target.id})),1),a.cost=m(a.cards),p(a)}}),S,Object(h.jsx)(v.a,{onClick:function(){e.click()},variant:"dark",size:"lg",children:"Cancel"})]})]})},C=function(e){return Object(h.jsxs)("div",{data:JSON.stringify(e.data),style:{width:"17vw",cursor:"pointer"},id:e.data.id,onClick:e.click,children:[Object(h.jsx)("h1",{style:{textAlign:"center"},children:e.data.deck_name}),Object(h.jsx)("img",{style:{width:"17vw"},id:e.data.id,alt:e.data.id,data:JSON.stringify(e.data),src:m[e.data.cover]})]})},S=function(e){var a=Object(t.useState)([]),s=Object(n.a)(a,2),c=s[0],r=s[1];Object(t.useEffect)((function(){var e=new FormData;e.append("user",document.getElementById("user").value),j.a.post("/faeria/Faeria/utils/getDecks.php",e).then((function(e){r(e.data)})).catch((function(e){console.log("Network Error",e.message)}))}),[]);var i=c.map((function(a){return Object(h.jsx)(C,{data:a,click:e.click},a.id)}));return i.push(Object(h.jsx)(C,{data:{id:0,deck_name:"Add new",cover:0,cards:[],cost:0},click:e.click},"0")),i},E=function(){var e=Object(t.useState)(!0),a=Object(n.a)(e,2),s=a[0],c=a[1],r=Object(t.useState)({}),i=Object(n.a)(r,2),d=i[0],l=i[1];return s?Object(h.jsx)("div",{style:{display:"flex",flexWrap:"wrap",height:"100vh",width:"100vw",justifyContent:"space-evenly",overflow:"scroll"},children:Object(h.jsx)(S,{click:function(e){l(JSON.parse(e.target.attributes.data.value)),c(!1)}})}):Object(h.jsx)(_,{data:d,click:function(){l({}),c(!0)}})},N=function(){return Object(h.jsx)(E,{})};s(80);i.a.render(Object(h.jsx)(c.a.StrictMode,{children:Object(h.jsx)(N,{})}),document.getElementById("deck-builder"))}},[[81,1,2]]]);
//# sourceMappingURL=main.21c0cf12.chunk.js.map