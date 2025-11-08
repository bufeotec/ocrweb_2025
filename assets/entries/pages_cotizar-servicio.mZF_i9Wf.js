import{s as Sc,t as ac,u as s,j as c,v as Tc,w as oc,z as $,B as Ic,D as I,E as q,F as tc,G as Pc,H as Ac,J as ic,f as Dc,n as o,l as L,m as M,a as n,y as J,C as Rc,P as Ec,A as O,I as C,$ as X,b as U,c as t,d as w,x as Q,k as Fc,O as _c,e as Lc,M as Mc,R as Oc,g as Uc,p as Vc,h as k,i as Bc,o as B,q as A,r as Hc}from"../chunks/chunk-rsFusuTo.js";/* empty css                      */var V="rovingFocusGroup.onEntryFocus",$c={bubbles:!1,cancelable:!0},D="RovingFocusGroup",[H,rc,Gc]=Sc(D),[Wc,nc]=ac(D,[Gc]),[Zc,Kc]=Wc(D),lc=s.forwardRef((e,a)=>c.jsx(H.Provider,{scope:e.__scopeRovingFocusGroup,children:c.jsx(H.Slot,{scope:e.__scopeRovingFocusGroup,children:c.jsx(Jc,{...e,ref:a})})}));lc.displayName=D;var Jc=s.forwardRef((e,a)=>{const{__scopeRovingFocusGroup:r,orientation:i,loop:u=!1,dir:l,currentTabStopId:d,defaultCurrentTabStopId:v,onCurrentTabStopIdChange:x,onEntryFocus:p,preventScrollOnEntryFocus:f=!1,...m}=e,h=s.useRef(null),P=Tc(a,h),g=oc(l),[z=null,R]=$({prop:d,defaultProp:v,onChange:x}),[y,j]=s.useState(!1),E=Ic(p),jc=rc(r),F=s.useRef(!1),[qc,Z]=s.useState(0);return s.useEffect(()=>{const b=h.current;if(b)return b.addEventListener(V,E),()=>b.removeEventListener(V,E)},[E]),c.jsx(Zc,{scope:r,orientation:i,dir:g,loop:u,currentTabStopId:z,onItemFocus:s.useCallback(b=>R(b),[R]),onItemShiftTab:s.useCallback(()=>j(!0),[]),onFocusableItemAdd:s.useCallback(()=>Z(b=>b+1),[]),onFocusableItemRemove:s.useCallback(()=>Z(b=>b-1),[]),children:c.jsx(I.div,{tabIndex:y||qc===0?-1:0,"data-orientation":i,...m,ref:P,style:{outline:"none",...e.style},onMouseDown:q(e.onMouseDown,()=>{F.current=!0}),onFocus:q(e.onFocus,b=>{const zc=!F.current;if(b.target===b.currentTarget&&zc&&!y){const K=new CustomEvent(V,$c);if(b.currentTarget.dispatchEvent(K),!K.defaultPrevented){const _=jc().filter(N=>N.focusable),kc=_.find(N=>N.active),Nc=_.find(N=>N.id===z),Cc=[kc,Nc,..._].filter(Boolean).map(N=>N.ref.current);uc(Cc,f)}}F.current=!1}),onBlur:q(e.onBlur,()=>j(!1))})})}),sc="RovingFocusGroupItem",dc=s.forwardRef((e,a)=>{const{__scopeRovingFocusGroup:r,focusable:i=!0,active:u=!1,tabStopId:l,...d}=e,v=tc(),x=l||v,p=Kc(sc,r),f=p.currentTabStopId===x,m=rc(r),{onFocusableItemAdd:h,onFocusableItemRemove:P}=p;return s.useEffect(()=>{if(i)return h(),()=>P()},[i,h,P]),c.jsx(H.ItemSlot,{scope:r,id:x,focusable:i,active:u,children:c.jsx(I.span,{tabIndex:f?0:-1,"data-orientation":p.orientation,...d,ref:a,onMouseDown:q(e.onMouseDown,g=>{i?p.onItemFocus(x):g.preventDefault()}),onFocus:q(e.onFocus,()=>p.onItemFocus(x)),onKeyDown:q(e.onKeyDown,g=>{if(g.key==="Tab"&&g.shiftKey){p.onItemShiftTab();return}if(g.target!==g.currentTarget)return;const z=Yc(g,p.orientation,p.dir);if(z!==void 0){if(g.metaKey||g.ctrlKey||g.altKey||g.shiftKey)return;g.preventDefault();let y=m().filter(j=>j.focusable).map(j=>j.ref.current);if(z==="last")y.reverse();else if(z==="prev"||z==="next"){z==="prev"&&y.reverse();const j=y.indexOf(g.currentTarget);y=p.loop?ce(y,j+1):y.slice(j+1)}setTimeout(()=>uc(y))}})})})});dc.displayName=sc;var Xc={ArrowLeft:"prev",ArrowUp:"prev",ArrowRight:"next",ArrowDown:"next",PageUp:"first",Home:"first",PageDown:"last",End:"last"};function Qc(e,a){return a!=="rtl"?e:e==="ArrowLeft"?"ArrowRight":e==="ArrowRight"?"ArrowLeft":e}function Yc(e,a,r){const i=Qc(e.key,r);if(!(a==="vertical"&&["ArrowLeft","ArrowRight"].includes(i))&&!(a==="horizontal"&&["ArrowUp","ArrowDown"].includes(i)))return Xc[i]}function uc(e,a=!1){const r=document.activeElement;for(const i of e)if(i===r||(i.focus({preventScroll:a}),document.activeElement!==r))return}function ce(e,a){return e.map((r,i)=>e[(a+i)%e.length])}var ee=lc,ae=dc,G="Tabs",[oe,ye]=ac(G,[nc]),pc=nc(),[te,W]=oe(G),mc=s.forwardRef((e,a)=>{const{__scopeTabs:r,value:i,onValueChange:u,defaultValue:l,orientation:d="horizontal",dir:v,activationMode:x="automatic",...p}=e,f=oc(v),[m,h]=$({prop:i,onChange:u,defaultProp:l});return c.jsx(te,{scope:r,baseId:tc(),value:m,onValueChange:h,orientation:d,dir:f,activationMode:x,children:c.jsx(I.div,{dir:f,"data-orientation":d,...p,ref:a})})});mc.displayName=G;var fc="TabsList",gc=s.forwardRef((e,a)=>{const{__scopeTabs:r,loop:i=!0,...u}=e,l=W(fc,r),d=pc(r);return c.jsx(ee,{asChild:!0,...d,orientation:l.orientation,dir:l.dir,loop:i,children:c.jsx(I.div,{role:"tablist","aria-orientation":l.orientation,...u,ref:a})})});gc.displayName=fc;var bc="TabsTrigger",vc=s.forwardRef((e,a)=>{const{__scopeTabs:r,value:i,disabled:u=!1,...l}=e,d=W(bc,r),v=pc(r),x=wc(d.baseId,i),p=yc(d.baseId,i),f=i===d.value;return c.jsx(ae,{asChild:!0,...v,focusable:!u,active:f,children:c.jsx(I.button,{type:"button",role:"tab","aria-selected":f,"aria-controls":p,"data-state":f?"active":"inactive","data-disabled":u?"":void 0,disabled:u,id:x,...l,ref:a,onMouseDown:q(e.onMouseDown,m=>{!u&&m.button===0&&m.ctrlKey===!1?d.onValueChange(i):m.preventDefault()}),onKeyDown:q(e.onKeyDown,m=>{[" ","Enter"].includes(m.key)&&d.onValueChange(i)}),onFocus:q(e.onFocus,()=>{const m=d.activationMode!=="manual";!f&&!u&&m&&d.onValueChange(i)})})})});vc.displayName=bc;var xc="TabsContent",hc=s.forwardRef((e,a)=>{const{__scopeTabs:r,value:i,forceMount:u,children:l,...d}=e,v=W(xc,r),x=wc(v.baseId,i),p=yc(v.baseId,i),f=i===v.value,m=s.useRef(f);return s.useEffect(()=>{const h=requestAnimationFrame(()=>m.current=!1);return()=>cancelAnimationFrame(h)},[]),c.jsx(Pc,{present:u||f,children:({present:h})=>c.jsx(I.div,{"data-state":f?"active":"inactive","data-orientation":v.orientation,role:"tabpanel","aria-labelledby":x,hidden:!h,id:p,tabIndex:0,...d,ref:a,style:{...e.style,animationDuration:m.current?"0s":void 0},children:h&&l})})});hc.displayName=xc;function wc(e,a){return`${e}-trigger-${a}`}function yc(e,a){return`${e}-content-${a}`}var ie=mc,re=gc,ne=vc,le=hc;const Y=s.forwardRef(({defaultValue:e,...a},r)=>{const[i,u]=$({prop:a.value,defaultProp:e,onChange:a.onValueChange}),l=s.useCallback(async d=>{await Ac(),u(d)},[u]);return c.jsx(ie,{ref:r,...a,value:i,onValueChange:l})}),cc=re,S=s.forwardRef(({value:e,...a},r)=>{const i=ic(a);return c.jsx(ne,{ref:r,value:e??i??"",...a})}),T=s.forwardRef(({value:e,...a},r)=>{const i=ic(a);return c.jsx(le,{ref:r,value:e??i??"",...a})}),ec="OCR Aduanas",se=[{id:"SiLnznfU9-ai3CN7x9EyF"},{id:"sN55azSNTC4ezh7aTcqei",maxWidth:1025},{id:"VRJqfSL-WsQqBf8B-QlxP",maxWidth:767},{id:"8TRRB7yFQmpwwjxRv9QmB",maxWidth:479}],de="ocr-favicon_3tpxj7RKV2gY2v-dXNFIW.png",ue=["Inter-VariableFont_opsz_wght_u4MclA_Lkup-WL6dI2W97.ttf"],pe=[],me=e=>c.jsx(Dc,{className:"w-body cn2rl20",children:c.jsxs(o,{className:"w-box",children:[c.jsx(L,{children:c.jsx(M,{children:c.jsx(o,{tag:"nav",className:"w-box c8qerp cxusdfn c1x32r0l c4n3cgz ch13x5l cow6sb8 c1daf58q ccpaivy c977r2l cllzbui cn2rl20 cjz04jk ca9m4an c16yx88h c1qugfek c1omsdlv c19jheig c1r7518b cw7tvpi c1s7y3u4 cr5i3yc cfhumb8 navbar",children:c.jsxs(o,{className:"w-box c166km60 c17rtxxo c1ocai34 c1g5pzxy ch13x5l cow6sb8 cghfx1r",children:[c.jsx(o,{className:"w-box",children:c.jsx(n,{href:"/",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(J,{src:"/assets/logo-ocr_1_Wu-s0oFkJ6tqILHb2CXOA.png",width:1210,height:420,className:"w-image cbofufi c4ezbav c1wm8zvv"})})}),c.jsx(o,{className:"w-box c1g5pzxy ch13x5l cghfx1r cow6sb8 c9d95sc",children:c.jsxs(Rc,{className:"w-navigation-menu cbqi16r c1o93utx",children:[c.jsxs(Ec,{className:"w-menu-list c1g5pzxy c1q47sjk c5e8b0u c1wgbs04 c1kpfydb cghfx1r c1nmprqz cww148w c1enxvab c1g0zwnq c1qjda2d",children:[c.jsx(O,{"data-ws-index":"0",className:"w-menu-item",children:c.jsx(C,{children:c.jsx(n,{href:"/",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0",children:"inicio"})})}),c.jsxs(O,{"data-ws-index":"1",className:"w-menu-item",children:[c.jsx(X,{children:c.jsxs(U,{className:"w-button ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0",children:[c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll",children:"nosotros"}),c.jsx(o,{className:"w-box c6a3w2k c1s10tni c1b4lz7s cuoz3xb c3g1ldu c1qendxj c15wxuvm c1kflc4s covi4im c1omsdlv",children:c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="100%" height="100%" style="display: block;"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m4 6 4 4 4-4"/></svg>',className:"w-html-embed"})})]})}),c.jsx(Q,{"data-ws-index":"0",className:"w-menu-content c1jyxwo5 cf58mxd c1er4ftx chlwcne ct15lbw",children:c.jsx(o,{className:"w-box c1g5pzxy c1864r11 c1g0toos c1cmnsg9",children:c.jsxs(o,{className:"w-box c1ugraim c1g5pzxy c1864r11 c1g0toos ceyphpw",children:[c.jsx(C,{children:c.jsx(n,{href:"/nosotros",className:"w-link cjz4j9x c1g5pzxy ceyphpw c1bag84g c1eskbs8 c1m4ogj9 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1sr8wwd clpozbc ct88ur9 c1fy088x c18lf59z co6lwa0 c28mab c1tnt8m2",children:c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll c1qfwmz0",children:"misión, visión y valores"})})}),c.jsx(C,{children:c.jsx(n,{href:"/politica-de-gestion",className:"w-link cjz4j9x c1g5pzxy ceyphpw c1bag84g c1eskbs8 c1m4ogj9 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1sr8wwd clpozbc ct88ur9 c1fy088x c18lf59z co6lwa0 c28mab c1tnt8m2",children:c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll c1qfwmz0",children:"política de gestión"})})}),c.jsx(C,{children:c.jsx(n,{href:"/certificaciones",className:"w-link cjz4j9x c1g5pzxy ceyphpw c1bag84g c1eskbs8 c1m4ogj9 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1sr8wwd clpozbc ct88ur9 c1fy088x c18lf59z co6lwa0 c28mab c1tnt8m2",children:c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll c1qfwmz0",children:"certificaciones"})})})]})})})]}),c.jsxs(O,{"data-ws-index":"2",className:"w-menu-item",children:[c.jsx(X,{children:c.jsxs(U,{className:"w-button ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0",children:[c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll",children:"servicios"}),c.jsx(o,{className:"w-box c6a3w2k c1s10tni c1b4lz7s cuoz3xb c3g1ldu c1qendxj c15wxuvm c1kflc4s covi4im c1omsdlv",children:c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="100%" height="100%" style="display: block;"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m4 6 4 4 4-4"/></svg>',className:"w-html-embed"})})]})}),c.jsx(Q,{"data-ws-index":"1",className:"w-menu-content c1jyxwo5 cf58mxd c1er4ftx chlwcne ct15lbw",children:c.jsx(o,{className:"w-box c1g5pzxy c1864r11 c1g0toos",children:c.jsxs(o,{className:"w-box c1ugraim c1g5pzxy c1864r11 c1g0toos ceyphpw",children:[c.jsx(C,{children:c.jsx(n,{href:"/sevicios",className:"w-link cjz4j9x c1g5pzxy ceyphpw c1bag84g c1eskbs8 c1m4ogj9 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1sr8wwd clpozbc ct88ur9 c1fy088x c18lf59z co6lwa0 c28mab c1tnt8m2",children:c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll c1qfwmz0",children:"todos los servicios"})})}),c.jsx(C,{children:c.jsx(n,{href:"/tarifario-de-servicios",className:"w-link cjz4j9x c1g5pzxy ceyphpw c1bag84g c1eskbs8 c1m4ogj9 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1sr8wwd clpozbc ct88ur9 c1fy088x c18lf59z co6lwa0 c28mab c1tnt8m2",children:c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll c1qfwmz0",children:"tarifario de servicios"})})})]})})})]}),c.jsxs(n,{href:"https://ocraduanas.tracking.sumax.pe/#/auth/login",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c11ert1v czw8pam c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0",children:[c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256"><path d="M200,224H150.54A266.56,266.56,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25a88,88,0,0,0-176,0c0,31.4,14.51,64.68,42,96.25A266.56,266.56,0,0,0,105.46,224H56a8,8,0,0,0,0,16H200a8,8,0,0,0,0-16ZM56,104a72,72,0,0,1,144,0c0,57.23-55.47,105-72,118C111.47,209,56,161.23,56,104Zm112,0a40,40,0,1,0-40,40A40,40,0,0,0,168,104Zm-64,0a24,24,0,1,1,24,24A24,24,0,0,1,104,104Z"></path></svg>',className:"w-html-embed c1n7s4mc"}),c.jsx(t,{tag:"span",className:"w-text",children:"tracking"})]}),c.jsxs(o,{className:"w-box ch13x5l cghfx1r cow6sb8 c1xtzu1y cqu6ovh c1g5pzxy c1daf58q",children:[c.jsx(n,{href:"/contacto",className:"w-link crq5t9b c18eddnm cqtbfll c1882vc4 cn2rl20 c11hrh2v c1d8mbh1 cih3jv5 c1n727n clpozbc c17uyxqc c3neivu c14z6a5t c5weh5w c1ajodkv c24v623 c1pkiz0c c1b8gix2 c1e73v2o c1mppxaw cr8asgl co9su86 cbiigl5 c1e4ks8c c1ejau4z ca4qivu c1qxordl cez4vp7 c1vacj0o c10as58h c43acu2 cbogomo",children:c.jsx(t,{tag:"span",className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll",children:"contáctanos"})}),c.jsx(n,{href:"/cotizar-servicio",className:"w-link crq5t9b c18eddnm cqtbfll c14loo9j cwqj01v c11hrh2v c1d8mbh1 cih3jv5 c1n727n clpozbc c17uyxqc c3neivu c14z6a5t c5weh5w c1ajodkv c24v623 c1pkiz0c c1b8gix2 c1e73v2o c1mppxaw cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h",children:c.jsx(t,{tag:"span",className:"w-text cze2ngc c1c6rhqz c12keurq cqtbfll",children:"cotización"})})]})]}),c.jsx(o,{className:"w-box c140n4c9 c1jyxwo5 c1a2kw2q c1g5pzxy c1nmprqz",children:c.jsx(Fc,{className:"w-menu-viewport cbqi16r c1ok4qqi c1uccste c1l1hvym cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1293i6k c1qqbwsh c19lcn6h c1migv0s c6vjvbj c5jd53x"})})]})}),c.jsxs(_c,{children:[c.jsx(Lc,{children:c.jsx(U,{className:"w-button c1idtf62 cghfx1r c1nmprqz c1ndxj4w cpl7f2n c1b4l16b cwf0woq c1ip3x96 crq5t9b c18eddnm c1l6hdxo cflfrr9 c1gjz9sp c17uolmr cajv8ul c10nxhi8 c2687es c1nwjhel c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1wc8n02",children:c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="100%" height="100%" style="display: block;"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M2.667 8h10.666M2.667 4h10.666M2.667 12h10.666"/></svg>',className:"w-html-embed"})})}),c.jsx(Mc,{className:"w-dialog-overlay c1ypfqff cf58mxd c1hvsh8o ccyxqzf c1jyxwo5 c1hpsefb c11fvq2k chvzzsp c1g5pzxy ceyphpw c16kfeim c16f1u5r co46elm",children:c.jsxs(Oc,{className:"w-dialog-content cwftxt6 c1gpv2n4 c83au3d c1daf58q c1hpsefb c1g5pzxy ceyphpw c1864r11 c1g0toos c1293i6k c19lcn6h cbqi16r c1ocai34 cnizfi7 c1q47sjk c5jd53x c1wbru6",children:[c.jsxs(o,{tag:"nav",role:"navigation",className:"w-box c1qtyriq cjslizy c1xhhgk c7dizn6 cw15oqh",children:[c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cww148w c1enxvab c1rxiyer c90h7wi",children:[c.jsx(n,{href:"/",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"inicio"}),c.jsxs(o,{className:"w-box cjslizy c1xhhgk cxh1dah cvympcu",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq cg3fc08",children:"Nosotros"}),c.jsx(n,{href:"/nosotros",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"misión, visión y valores"}),c.jsx(n,{href:"/politica-de-gestion",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"política de gestión"}),c.jsx(n,{href:"/certificaciones",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"certificaciones"})]}),c.jsxs(o,{className:"w-box cjslizy c1xhhgk cxh1dah cvympcu",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq cg3fc08",children:"Servicios"}),c.jsx(n,{href:"/sevicios",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"todos los servicios"}),c.jsx(n,{href:"/tarifario-de-servicios",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1c6rhqz c12keurq cqtbfll c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 cgbf1gu c1a4f8g8 c17x2ta8 czg7p48",children:"tarifario de servicios"})]})]}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cww148w c1enxvab c1rxiyer c90h7wi",children:[c.jsxs(n,{href:"https://ocraduanas.tracking.sumax.pe/#/auth/login",className:"w-link ccj6xnq cghfx1r c1nmprqz cze2ngc c11hrh2v c1d8mbh1 clpozbc c1qfwmz0 c1ndxj4w c1b7pba1 c1q1z6m c1rli7rt c94t5ns c1a6fl5u cexqt99 c1fez1zb c12keurq cqtbfll c11ert1v czw8pam c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu c18lf59z co6lwa0 c1gbinus c1hjuao0 c17x2ta8 cdcezbw chcm2al ckf9f19 c1k96671",children:[c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256"><path d="M200,224H150.54A266.56,266.56,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25a88,88,0,0,0-176,0c0,31.4,14.51,64.68,42,96.25A266.56,266.56,0,0,0,105.46,224H56a8,8,0,0,0,0,16H200a8,8,0,0,0,0-16ZM56,104a72,72,0,0,1,144,0c0,57.23-55.47,105-72,118C111.47,209,56,161.23,56,104Zm112,0a40,40,0,1,0-40,40A40,40,0,0,0,168,104Zm-64,0a24,24,0,1,1,24,24A24,24,0,0,1,104,104Z"></path></svg>',className:"w-html-embed c1n7s4mc"}),c.jsx(t,{tag:"span",className:"w-text",children:"tracking"})]}),c.jsx(n,{href:"/contacto",className:"w-link cqtbfll c1882vc4 cn2rl20 c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k ckt5idt c99runk c17j41yl c1q4mwb9 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 c3ybrdo c47sw63 c1tgi1q6 cr8asgl co9su86 cbiigl5 c1e4ks8c c1ejau4z ca4qivu c1qxordl cez4vp7 c1vacj0o c10as58h c43acu2 cbogomo c15ned76 c1wjj2lc c1mfw19l ciywpt4 ckrrvgx",children:"contáctanos"}),c.jsx(n,{href:"/cotizar-servicio",className:"w-link cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k ckt5idt c99runk c17j41yl c1q4mwb9 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 c3ybrdo c47sw63 c1tgi1q6 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4 ckrrvgx",children:"cotización"})]})]}),c.jsx(Uc,{className:"w-close-button c12d0m4s c1rm8sra c140n4c9 c1bdwp4u c1eyvki2 c1v2ewxw ctvunyl c1rjr90p c1njayb0 c5a3u7z c1g5pzxy cghfx1r c1nmprqz c1b4lz7s cuoz3xb c1ndxj4w ct88ur9 c1hbkd5c c103y1hf c1e5knv0",children:c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="100%" height="100%" style="display: block;"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12.5 3 3 12.5M3 3l9.5 9.5"/></svg>',className:"w-html-embed"})})]})})]})]})})})}),c.jsx(L,{children:c.jsx(M,{children:c.jsx(n,{href:"https://wa.me/51964104743",className:"w-link c8bd5bu c7y6ued ctfz18c ccfns1x c1ot0s2o czk5s86 cd2gyy c1b29zkd ccj6xnq cghfx1r c1nmprqz c1ypfqff cy56yec c1im46f3 c13kq8hc c1p37ool cb9zb3z c1azpg8l ct1i5nb c1ua3urj c1bnvo9 c1k6ny47 c12f73wj",children:c.jsx(w,{code:'<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>',className:"w-html-embed"})})})}),c.jsxs(o,{"data-ws-tag":"main",className:"w-box c1daf58q",children:[c.jsx(o,{"data-ws-tag":"section",className:"w-box c1x32r0l c4n3cgz c1daf58q cw7tvpi c1s7y3u4 cr5i3yc cfhumb8",children:c.jsxs(o,{className:"w-box c166km60 c17rtxxo c1ocai34 c1g5pzxy ch13x5l c1nmprqz cbpusjw c1daf58q c12m1jcp c1b8gix2 cn3oyg2 c19ip6do c1yrxu9w c1kmw0pe c1nxab4n c2guyig",children:[c.jsx(o,{className:"w-box c1daf58q c1g5pzxy cghfx1r cb5iv44 c1yfmzqf",children:c.jsx(Vc,{className:"w-separator ccufqy0 c1jaiqro cva2xsp c1lzgef8 c6vpr27 cn3oyg2 cydkyay c1z0meyf"})}),c.jsx(o,{className:"w-box c1daf58q c1g5pzxy cghfx1r c1nmprqz c1yfmzqf",children:c.jsx(k,{className:"w-heading c1882vc4 czbfsep c1u1tlke c103wvbq c15v397v cmtgkwl cqtbfll",children:"cotización"})}),c.jsx(o,{className:"w-box c1daf58q c1g5pzxy cghfx1r c1nmprqz chzef1i c1pkiz0c cydkyay c19ip6do c1yrxu9w c4xdt99"})]})}),c.jsx(o,{"data-ws-tag":"section",className:"w-box c1x32r0l c4n3cgz c1daf58q c12z2vrc c14og0i9 cw7tvpi c1s7y3u4 cr5i3yc cfhumb8",children:c.jsxs(o,{className:"w-box c166km60 c17rtxxo c1ocai34 c1g5pzxy ceyphpw cow6sb8 c1aldjk5 c1daf58q c1rzd686 c1mkp46z",children:[c.jsx(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ch13x5l c19ip6do c1yrxu9w c1kmw0pe",children:c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1qfwmz0",children:"¿Qué deseas cotizar?"})}),c.jsxs(Y,{defaultValue:"0",className:"w-tabs ceyphpw c1g5pzxy c1aldjk5",children:[c.jsxs(cc,{className:"w-tabs-list ccj6xnq c1we04tw cghfx1r cb5iv44 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1ndxj4w cftmju0 c1fg62x4 cyswbyg cz3j363 c2u3m2c cif826s cz0h0xx cgbf1gu c1a4f8g8 c1fqwiut",children:[c.jsxs(S,{"data-ws-index":"0",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 ceag3g1 c1d429hl c2ur1b9 cvqj6ns crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk ccc7r3d",children:[c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Servicio Específico"}),c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cpum6l7 c17xzdbz",children:"Elige entre Carga, Aduanas o Transporte"})]}),c.jsxs(S,{"data-ws-index":"1",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 ceag3g1 c1d429hl c2ur1b9 cvqj6ns crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk ccc7r3d",children:[c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Servicio Integral"}),c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cpum6l7 c17xzdbz",children:"Todo en uno: Carga + Aduanas + Transporte"})]}),c.jsxs(S,{"data-ws-index":"2",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 ceag3g1 c1d429hl c2ur1b9 cvqj6ns crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk ccc7r3d",children:[c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Otros Servicios"}),c.jsx(t,{className:"w-text cze2ngc c1c6rhqz c12keurq cpum6l7 c17xzdbz",children:"Capacitación, Comercio Exterior y Trámites VUCE"})]})]}),c.jsxs(T,{"data-ws-index":"0",className:"w-tab-content ceyphpw c1g5pzxy c1rzd686 c1mkp46z c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsx(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ch13x5l c1626814 c19ip6do c1yrxu9w c1kmw0pe",children:c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1qfwmz0",children:"Escoge un servicio"})}),c.jsxs(Y,{defaultValue:"0",className:"w-tabs ceyphpw c1g5pzxy c1aldjk5 ct3mtgl ccz07aw",children:[c.jsxs(cc,{className:"w-tabs-list ccj6xnq c1we04tw cghfx1r cb5iv44 cpl7f2n c1b4l16b cwf0woq c1ip3x96 c1ndxj4w cftmju0 c1fg62x4 cyswbyg cz3j363 c2u3m2c cif826s cz0h0xx cgbf1gu c1a4f8g8 c1fqwiut",children:[c.jsx(S,{"data-ws-index":"0",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 cv3wwb cih3jv5 c1v36liv c1n727n crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns cetwrhs c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk c1ixd2pa",children:c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq",children:"Carga Internacional"})}),c.jsx(S,{"data-ws-index":"1",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 cv3wwb cih3jv5 c1v36liv c1n727n crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns cetwrhs c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk c1ixd2pa",children:c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq",children:"Aduanas"})}),c.jsx(S,{"data-ws-index":"2",className:"w-tab-trigger c1g5pzxy c1aldjk5 c1nmprqz c6xk3i3 c15j3sr3 c1qyfuc2 cx89ip3 cv3wwb cih3jv5 c1v36liv c1n727n crq5t9b c18eddnm cze2ngc c1qendxj cgmxqng c1kflc4s covi4im c1omsdlv ceyphpw cqu6ovh c1qfwmz0 c1lzgef8 c6vpr27 cn3oyg2 cydkyay cwuupzl c1x99si8 cxyy9vs cb75rns cetwrhs c93yp0v c6l1c0m c1a6l43q c5bhi70 c1e5knv0 cmrs9rd c1i0yg9u cgc55iu cngg1ik cgkw1dk c16j8h7j c1fn5iz3 c7vewwx c1w0118z c124k33k c1vu137r cjwpp0y c1xjqjwb c1grj3vw cfsg9t6 c99runk c1ixd2pa",children:c.jsx(t,{tag:"span",className:"w-text c1fez1zb c12keurq cpum6l7 c17xzdbz",children:"Transporte local y nacional"})})]}),c.jsxs(T,{"data-ws-index":"0",className:"w-tab-content c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsxs(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ceyphpw cqu6ovh c1xtzu1y c1qxoglk c19ip6do c1yrxu9w c1kmw0pe",children:[c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1882vc4",children:"Cotizar carga internacional"}),c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"Transportamos tus mercancías por aire, mar y tierra desde y a todo el mundo."})]}),c.jsx(w,{code:`  <!-- Inicio formulario -->
     
    <form action= "https://formsubmit.co/operacionescargo@ocraduanas.com" method="POST" class="form-cotizacion-1" enctype="multipart/form-data">
    
     <!-- Configuración de FormSubmit -->
    <input type="hidden" name="_subject" value="Cotización de Carga Internacional">
<input type="hidden" name="Formulario" value="Carga Internacional">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    
  <!-- Datos de la empresa -->
  <fieldset class="section-form">
  <legend>Datos de la empresa</legend>
    
      <div class= "title-of-container"> 
        <h3>Datos de la empresa</h3>
      </div>
      
      <div class= "form-content">    
      
      <div class="form-group">
        <label for="razon-social">Razón Social*</label>
        <input type="text" id="razon-social" name="Razón Social" required>
      </div>
      
      <div class="form-group">
        <label for="ruc">RUC*</label>
        <input type="text" id="ruc" name="RUC" required pattern="[0-9]{11}" placeholder="El RUC debe tener 11 dígitos">
      </div>
    
      <div class="form-group">
        <label for="persona-contacto">Persona a contactar</label>
        <input type="text" id="persona-contacto" name="Nombre del Contacto" placeholder="Nombres y apellidos">
      </div>
      
      <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="Email" required>
      </div>
    
      <div class="form-group">
        <label for="telefono">Teléfono / Celular*</label>
        <input type="tel" id="telefono" name="Teléfono" required>
      </div>
    
      </div>

  </fieldset>
  

 <!-- Información del envío -->
<fieldset class="section-form">
  <legend>Información del envío</legend>

  <div class="title-of-container">
    <h3>Información del envío</h3>
  </div>

  <div class="form-content">
    <div class="form-group">
      <label for="pais-embarque">País de embarque*</label>
      <input type="text" id="pais-embarque" name="País de embarque" required>
    </div>

    <div class="form-group">
      <label for="puerto-embarque">Puerto o aeropuerto de embarque*</label>
      <input type="text" id="puerto-embarque" name="Puerto de mbarque" required>
    </div>

    <div class="form-group">
      <label for="via-transporte">Vía de transporte*</label>
        <select id="via-transporte" name="Vía de transporte" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="maritimo">Marítimo</option>
        <option value="aereo">Aéreo</option>
        <option value="terrestre">Terrestre</option>
      </select>
    </div>

    <div class="form-group">
      <label for="incoterms">INCOTERMS*</label>
      <select id="incoterms" name="INCOTERMS" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="EXW">EXW</option>
        <option value="FOB">FOB</option>
        <option value="CIF">CIF</option>
        <option value="DDP">DDP</option>
        <option value="FCA">FCA</option>
        <option value="CPT">CPT</option>
        <option value="CIP">CIP</option>
        <option value="DAP">DAP</option>
      </select>
    </div>

    <div class="form-group">
      <label for="direccion-recojo">Si marcas EXW, brinda la dirección de recojo</label>
      <input type="text" id="direccion-recojo" name="Dirección de recojo">
    </div>
  </div>
</fieldset>

<!-- Características de la carga -->
<fieldset class="section-form">
  <legend>Características de la carga</legend>

  <div class="title-of-container">
    <h3>Características de la carga</h3>
  </div>

   
    
  <div class="form-content">
    <div class="form-group">
      <label for="carga-fcl">Carga FCL*</label>
      <select id="carga-fcl" name="Carga FCL" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="1x20">1x20</option>
        <option value="1x40">1x40 ST</option>
        <option value="1x40 HC">1x40 HC</option>
      </select>
    </div>

    <div class="form-group">
      <label for="carga-lcl">Carga LCL y Aéreo - Detalle*</label>
      <input type="text" id="carga-lcl" name="Carga LCL y Aéreo" required>
    </div>

    <div class="form-group">
      <label for="peso">Peso (especificar unidades)*</label>
      <input type="text" id="peso" name="Peso" placeholder="Cantidad de peso en kg o lb" required >
    </div>

    <div class="form-group">
      <label for="dimensiones">Dimensiones (metros)*</label>
      <input type="text" id="dimensiones" name="Dimensiones" placeholder="largo, ancho, alto" required>
    </div>

    <div class="form-group">
      <label for="numero-bultos">N° de bultos (pallets, cajas)*</label>
      <input type="text" id="numero-bultos" name="Número de bultos" required>
    </div>

    <div class="form-group">
      <label for="tipo-mercancia">Tipo de mercancía*</label>
      <input type="text" id="tipo-mercancia" name="Tipo de mercancia" required>
    </div>
  </div>
</fieldset>

<!-- Información adicional -->
<fieldset class="section-form">
  <legend>Información adicional</legend>

  <div class="title-of-container">
    <h3>Información adicional</h3>
  </div>

  <div class="form-content">
    <div class="form-group">
      <label for="carga-general">Carga general / MO*</label>
      <input type="text" id="carga-general" name="Carga general - MO" required>
    </div>

    <div style="display: none;">
     <label>Deja este campo vacío</label>
     <input type="text" name="_honey">
   </div>

    <div class="form-group">
      <label for="valor-mercancia">Valor de mercancía (USD)*</label>
      <input type="number" id="valor-mercancia" name="Valor mercancía" required>
    </div>

    <div class="form-group">
      <label for="direccion-recojo-adicional">Dirección de recojo / código ZIP*</label>
      <input type="text" id="direccion-recojo-adicional" name="Dirección de recojo o ZIP" required>
    </div>

    <div class="form-group">
      <label>Lista de empaque*</label>
      <input type="file" id="lista-empaque" name="Lista de empaque" required>
    </div>

    <div class="form-group">
  <label for="otro">Otro</label>
  <textarea id="otro" name="otro" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..."></textarea>
</div>

  </div>
</fieldset>

<input type="hidden" name="_next" value="https://www.ocraduanas.com/solicitud-enviada">

  <button class= "w-button cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k cnlbe3b ckt5idt c99runk c17j41yl c1q4mwb9 c1b2ax0z c1fbrktt cz2oy3c cc1y16j c1yb7w76 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4" type="submit">Solicitar cotización</button>
</form>

<script>
  document.querySelector('.form-cotizacion-1').addEventListener('submit', function (e) {
    // Mostramos una pantalla de "enviando..." si quieres
    setTimeout(() => {
      window.location.href = "https://www.ocraduanas.com/solicitud-enviada";
    }, 3000); // da tiempo a que el formulario se envíe
  });
<\/script>

`,executeScriptOnCanvas:!0,className:"w-html-embed"})]}),c.jsxs(T,{"data-ws-index":"1",className:"w-tab-content c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsxs(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ceyphpw cqu6ovh c1xtzu1y c1qxoglk c19ip6do c1yrxu9w c1kmw0pe",children:[c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1882vc4",children:"Cotizar servicio de aduanas"}),c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"Gestionamos el proceso aduanero de tus importaciones y exportaciones."})]}),c.jsx(w,{code:`<!-- Inicio formulario -->
     
    <form action= "https://formsubmit.co/operacionescargo@ocraduanas.com" method="POST" class="form-cotizacion" enctype="multipart/form-data">
    
     <!-- Configuración de FormSubmit -->
    <input type="hidden" name="_subject" value="Cotización de Aduanas">
    <input type="hidden" name="Formulario" value="Servicio de Aduanas">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    
  <!-- Datos de la empresa -->
  <fieldset class="section-form">
  <legend>Datos de la empresa</legend>
    
      <div class= "title-of-container"> 
        <h3>Datos de la empresa</h3>
      </div>
      
      <div class= "form-content">    
      
      <div class="form-group">
        <label for="razon-social-aduanas">Razón Social*</label>
        <input type="text" id="razon-social-aduanas" name="Razón Social" required>
      </div>
      
      <div class="form-group">
        <label for="ruc-aduanas">RUC*</label>
        <input type="text" id="ruc-aduanas" name="RUC" required pattern="[0-9]{11}" placeholder="El RUC debe tener 11 dígitos">
      </div>
    
      <div class="form-group">
        <label for="persona-contacto-aduanas">Persona a contactar</label>
        <input type="text" id="persona-contacto-aduanas" name="Nombre del Contacto" placeholder="Nombres y apellidos">
      </div>
      
      <div class="form-group">
        <label for="email-aduanas">Email*</label>
        <input type="email" id="email-aduanas" name="Email" required>
      </div>
    
      <div class="form-group">
        <label for="telefono-aduanas">Teléfono / Celular*</label>
        <input type="tel" id="telefono-aduanas" name="Teléfono" required>
      </div>
    
      </div>

  </fieldset>
  

<!-- Información adicional -->
<fieldset class="section-form">
  <legend>Información adicional</legend>

  <div class="title-of-container">
    <h3>Información adicional</h3>
  </div>

  <div class="form-content">
    <div class="form-group">
      <label for="partida-arancelaria-aduanas">Partida Arancelaria (opcional)</label>
      <input type="text" id="partida-arancelaria-aduanas" name="Partida Arancelaria" >
    </div>

    <div style="display: none;">
     <label>Deja este campo vacío</label>
     <input type="text" name="_honey">
   </div>

    <div class="form-group">
      <label for="valor-mercancia-aduanas">Valor de mercancía (USD)*</label>
      <input type="number" id="valor-mercancia-aduanas" name="Valor mercancía" required>
    </div>

    <div class="form-group">
      <label>Factura Comercial*</label>
      <input type="file" id="factura-comercial-aduanas" name="Factura Comercial" required>
    </div>
    
    <div class="form-group">
      <label>Documento de transporte*</label>
      <input type="file" id="documento-transporte-aduanas" name="Documento de Transporte" required>
    </div>
    
    <div class="form-group">
      <label>Seguro de Transporte*</label>
      <input type="file" id="documento-seguro-aduanas" name="Seguro de Transporte" required>
    </div>

    <div class="form-group">
  <label for="otro">Otro</label>
  <textarea id="otro" name="otro" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..."></textarea>
</div>

  </div>
</fieldset>

<input type="hidden" name="_next" value="https://www.ocraduanas.com/solicitud-enviada">

  <button class= "w-button cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k cnlbe3b ckt5idt c99runk c17j41yl c1q4mwb9 c1b2ax0z c1fbrktt cz2oy3c cc1y16j c1yb7w76 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4" type="submit">Solicitar cotización</button>
</form>


<script>
  document.querySelector('.form-cotizacion').addEventListener('submit', function (e) {
    // Mostramos una pantalla de "enviando..." si quieres
    setTimeout(() => {
      window.location.href = "https://www.ocraduanas.com/solicitud-enviada";
    }, 3000); // da tiempo a que el formulario se envíe
  });
<\/script>
`,className:"w-html-embed"})]}),c.jsxs(T,{"data-ws-index":"2",className:"w-tab-content c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsxs(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ceyphpw cz3j363 cyswbyg c1qxoglk c19ip6do c1yrxu9w c1kmw0pe",children:[c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1882vc4",children:"Cotizar servicio de transporte"}),c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"Transportamos tus mercancías a nivel local y nacional."})]}),c.jsx(w,{code:`<!-- Inicio formulario -->
     
    <form action= "https://formsubmit.co/operacionescargo@ocraduanas.com" method="POST" class="form-cotizacion" enctype="multipart/form-data">
    
     <!-- Configuración de FormSubmit -->
    <input type="hidden" name="_subject" value="Cotización de Transporte">
    <input type="hidden" name="Formulario" value="Transporte local y nacional">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_next" value="https://www.ocraduanas.com/solicitud-enviada">
    
  <!-- Datos de la empresa -->
  <fieldset class="section-form">
  <legend>Datos de la empresa</legend>
    
      <div class= "title-of-container"> 
        <h3>Datos de la empresa</h3>
      </div>
      
      <div class= "form-content">    
      
      <div class="form-group">
        <label for="razon-social-transporte">Razón Social*</label>
        <input type="text" id="razon-social-transporte" name="Razón Social" required>
      </div>
      
      <div class="form-group">
        <label for="ruc-transporte">RUC*</label>
        <input type="text" id="ruc-transporte" name="RUC" required pattern="[0-9]{11}" placeholder="El RUC debe tener 11 dígitos">
      </div>
    
      <div class="form-group">
        <label for="persona-contacto-transporte">Persona a contactar</label>
        <input type="text" id="persona-contacto-transporte" name="Nombre del Contacto" placeholder="Nombres y apellidos">
      </div>
      
      <div class="form-group">
        <label for="email-transporte">Email*</label>
        <input type="email" id="email-transporte" name="Email" required>
      </div>
    
      <div class="form-group">
        <label for="telefono-transporte">Teléfono / Celular*</label>
        <input type="tel" id="telefono-transporte" name="Teléfono" required>
      </div>
    
      </div>

  </fieldset>
  

 <!-- Datos del destino -->
<fieldset class="section-form">
  <legend>Dtos del destino</legend>


  <div class="title-of-container">
    <h3>Datos del destino</h3>
  </div>

    <div class="form-group">
      <label for="departamento-transporte">Departamento*</label>
      <select id="departamento-transporte" name="Departamento" required>
        <option value="seleccion" disabled selected>Selecciona una     opción</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Áncash">Áncash</option>
        <option value="Apurímac">Apurímac</option>
        <option value="Arequipa">Arequipa</option>
        <option value="Ayacucho">Ayacucho</option>
        <option value="Cajamarca">Cajamarca</option>
        <option value="Callao">Callao</option>
        <option value="Cusco">Cusco</option>
        <option value="Huancavelica">Huancavelica</option>
        <option value="Huánuco">Huánuco</option>
        <option value="Ica">Ica</option>
        <option value="Junín">Junín</option>
        <option value="La Libertad">La Libertad</option>
        <option value="Lambayeque">Lambayeque</option>
        <option value="Lima">Lima</option>
        <option value="Loreto">Loreto</option>
        <option value="Madre de Dios">Madre de Dios</option>
        <option value="Moquegua">Moquegua</option>
        <option value="Pasco">Pasco</option>
        <option value="Piura">Piura</option>
        <option value="Puno">Puno</option>
        <option value="San Martín">San Martín</option>
        <option value="Tacna">Tacna</option>
        <option value="Tumbes">Tumbes</option>
        <option value="Ucayali">Ucayali</option>
      </select>
    </div>

  <div class="form-content">
    <div class="form-group">
      <label for="provincia-transporte">Provincia*</label>
      <input type="text" id="provincia-transporte" name="Provincia" required>
    </div>

    <div class="form-group">
      <label for="distrito-transporte">Distrito*</label>
      <input type="text" id="distrito-transporte" name="Distrito" required>
    </div>

  </div>
</fieldset>

<!-- Características de la carga -->
<fieldset class="section-form">
  <legend>Características de la carga</legend>

  <div class="title-of-container">
    <h3>Características de la carga</h3>
  </div>
 
    
  <div class="form-content">
         <div class="form-group">
      <label for="peso-transporte">Peso (especificar unidades)*</label>
      <input type="text" id="peso-transporte" name="Peso" placeholder="Cantidad de peso en kg o lb" required >
    </div>

    <div class="form-group">
      <label for="dimensiones-transporte">Dimensiones (metros)*</label>
      <input type="text" id="dimensiones-transporte" name="Dimensiones" placeholder="largo, ancho, alto" required>
    </div>

    <div class="form-group">
      <label for="numero-bultos-transporte">N° de bultos (pallets, cajas)*</label>
      <input type="text" id="numero-bultos-transporte" name="Número de bultos" required>
    </div>

    <div style="display: none;">
     <label>Deja este campo vacío</label>
     <input type="text" name="_honey">
   </div>

    <div class="form-group">
      <label for="tipo-mercancia-transporte">Tipo de mercancía*</label>
      <input type="text" id="tipo-mercancia-transporte" name="Tipo de mercancia" required>
    </div>
  </div>
</fieldset>


  <button class= "w-button cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k cnlbe3b ckt5idt c99runk c17j41yl c1q4mwb9 c1b2ax0z c1fbrktt cz2oy3c cc1y16j c1yb7w76 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4" type="submit">Solicitar cotización</button>
</form>

<script>
  document.querySelector('.form-cotizacion').addEventListener('submit', function (e) {
    // Mostramos una pantalla de "enviando..." si quieres
    setTimeout(() => {
      window.location.href = "https://www.ocraduanas.com/solicitud-enviada";
    }, 3000); // da tiempo a que el formulario se envíe
  });
<\/script>
`,className:"w-html-embed"})]})]})]}),c.jsxs(T,{"data-ws-index":"1",className:"w-tab-content c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsxs(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ceyphpw cz3j363 cyswbyg c1qxoglk c1626814 c19ip6do c1yrxu9w c1kmw0pe",children:[c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1882vc4",children:"Cotizar servicio Integral"}),c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"Nos encargamos de todo el proceso logístico de punto a punto."})]}),c.jsx(w,{code:`<!-- Inicio formulario -->
     
    <form action= "https://formsubmit.co/operacionescargo@ocraduanas.com" method="POST" class="form-cotizacion" enctype="multipart/form-data">
    
     <!-- Configuración de FormSubmit -->
    <input type="hidden" name="_subject" value="Cotización Integral">
    <input type="hidden" name="Formulario" value="Servicio Integral de Carga, Aduanas y Transporte">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_next" value="https://www.ocraduanas.com/solicitud-enviada">
    
  <!-- Datos de la empresa -->
  <fieldset class="section-form">
  <legend>Datos de la empresa</legend>
    
      <div class= "title-of-container"> 
        <h3>Datos de la empresa</h3>
      </div>
      
      <div class= "form-content">    
      
      <div class="form-group">
        <label for="razon-social-integral">Razón Social*</label>
        <input type="text" id="razon-social-integral" name="Razón Social" required>
      </div>
      
      <div class="form-group">
        <label for="ruc-integral">RUC*</label>
        <input type="text" id="ruc-integral" name="RUC" required pattern="[0-9]{11}" placeholder="El RUC debe tener 11 dígitos">
      </div>
    
      <div class="form-group">
        <label for="persona-contacto-integral">Persona a contactar</label>
        <input type="text" id="persona-contacto-integral" name="Nombre del Contacto" placeholder="Nombres y apellidos">
      </div>
      
      <div class="form-group">
        <label for="email-integral">Email*</label>
        <input type="email" id="email-integral" name="Email" required>
      </div>
    
      <div class="form-group">
        <label for="telefono-integral">Teléfono / Celular*</label>
        <input type="tel" id="telefono-integral" name="Teléfono" required>
      </div>
    
      </div>

  </fieldset>
  
  
  <!-- Información del envío -->
<fieldset class="section-form">
  <legend>Información del envío</legend>

  <div class="title-of-container">
    <h3>Información del envío</h3>
  </div>

  <div class="form-content">
    <div class="form-group">
      <label for="pais-embarque-integral">País de embarque*</label>
      <input type="text" id="pais-embarque-integral" name="País de embarque" required>
    </div>

    <div class="form-group">
      <label for="puerto-embarque-integral">Puerto o aeropuerto de embarque*</label>
      <input type="text" id="puerto-embarque-integral" name="Puerto de mbarque" required>
    </div>

    <div class="form-group">
      <label for="via-transporte-integral">Vía de transporte*</label>
        <select id="via-transporte-integral" name="Vía de transporte" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="maritimo">Marítimo</option>
        <option value="aereo">Aéreo</option>
        <option value="terrestre">Terrestre</option>
      </select>
    </div>

    <div class="form-group">
      <label for="incoterms-integral">INCOTERMS*</label>
      <select id="incoterms-integral" name="INCOTERMS" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="EXW">EXW</option>
        <option value="FOB">FOB</option>
        <option value="CIF">CIF</option>
        <option value="DDP">DDP</option>
        <option value="FCA">FCA</option>
        <option value="CPT">CPT</option>
        <option value="CIP">CIP</option>
        <option value="DAP">DAP</option>
      </select>
    </div>

    <div class="form-group">
      <label for="direccion-recojo-integral">Si marcas EXW, brinda la dirección de recojo</label>
      <input type="text" id="direccion-recojo-integral" name="Dirección de recojo">
    </div>
  </div>
</fieldset>
  

 <!-- Datos del destino -->
<fieldset class="section-form">
  <legend>Dtos del destino</legend>


  <div class="title-of-container">
    <h3>Datos del destino</h3>
  </div>

    <div class="form-group">
      <label for="departamento-integral">Departamento*</label>
      <select id="departamento-integral" name="Departamento" required>
        <option value="seleccion" disabled selected>Selecciona una     opción</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Áncash">Áncash</option>
        <option value="Apurímac">Apurímac</option>
        <option value="Arequipa">Arequipa</option>
        <option value="Ayacucho">Ayacucho</option>
        <option value="Cajamarca">Cajamarca</option>
        <option value="Callao">Callao</option>
        <option value="Cusco">Cusco</option>
        <option value="Huancavelica">Huancavelica</option>
        <option value="Huánuco">Huánuco</option>
        <option value="Ica">Ica</option>
        <option value="Junín">Junín</option>
        <option value="La Libertad">La Libertad</option>
        <option value="Lambayeque">Lambayeque</option>
        <option value="Lima">Lima</option>
        <option value="Loreto">Loreto</option>
        <option value="Madre de Dios">Madre de Dios</option>
        <option value="Moquegua">Moquegua</option>
        <option value="Pasco">Pasco</option>
        <option value="Piura">Piura</option>
        <option value="Puno">Puno</option>
        <option value="San Martín">San Martín</option>
        <option value="Tacna">Tacna</option>
        <option value="Tumbes">Tumbes</option>
        <option value="Ucayali">Ucayali</option>
      </select>
    </div>

  <div class="form-content">
    <div class="form-group">
      <label for="provincia-integral">Provincia*</label>
      <input type="text" id="provincia-integral" name="Provincia" required>
    </div>

    <div class="form-group">
      <label for="distrito-integral">Distrito*</label>
      <input type="text" id="distrito-integral" name="Distrito" required>
    </div>

  </div>
</fieldset>


<!-- Características de la carga -->
<fieldset class="section-form">
  <legend>Características de la carga</legend>

  <div class="title-of-container">
    <h3>Características de la carga</h3>
  </div>

    
  <div class="form-content">
    <div class="form-group">
      <label for="carga-fcl-integral">Carga FCL*</label>
      <select id="carga-fcl-integral" name="Carga FCL" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="1x20">1x20</option>
        <option value="1x40">1x40 ST</option>
        <option value="1x40 HC">1x40 HC</option>
      </select>
    </div>

    <div class="form-group">
      <label for="carga-lcl-integral">Carga LCL y Aéreo - Detalle*</label>
      <input type="text" id="carga-lcl-integral" name="Carga LCL y Aéreo" required>
    </div>

    <div class="form-group">
      <label for="peso-integral">Peso (especificar unidades)*</label>
      <input type="text" id="peso-integral" name="Peso" placeholder="Cantidad de peso en kg o lb" required >
    </div>

    <div class="form-group">
      <label for="dimensiones-integral">Dimensiones (metros)*</label>
      <input type="text" id="dimensiones-integral" name="Dimensiones" placeholder="largo, ancho, alto" required>
    </div>

    <div class="form-group">
      <label for="numero-bultos-integral">N° de bultos (pallets, cajas)*</label>
      <input type="text" id="numero-bultos-integral" name="Número de bultos" required>
    </div>

    <div class="form-group">
      <label for="tipo-mercancia-integral">Tipo de mercancía*</label>
      <input type="text" id="tipo-mercancia-integral" name="Tipo de mercancia" required>
    </div>
  </div>
</fieldset>


<!-- Información adicional -->
<fieldset class="section-form">
  <legend>Información adicional</legend>

  <div class="title-of-container">
    <h3>Información adicional</h3>
  </div>

  <div class="form-content">
  <div class="form-group">
      <label for="partida-arancelaria-integral">Partida Arancelaria*</label>
      <input type="text" id="partida-arancelaria-integral" name="Partida Arancelaria" required>
    </div>
    
    <div class="form-group">
      <label for="valor-mercancia-integral">Valor de mercancía (USD)*</label>
      <input type="number" id="valor-mercancia-integral" name="Valor de mercancía" required>
    </div>
    
    <div class="form-group">
      <label for="carga-integral">Carga general / MO*</label>
      <input type="text" id="carga-integral" name="Carga general - MO" required>
    </div>

    <div style="display: none;">
     <label>Deja este campo vacío</label>
     <input type="text" name="_honey">
   </div>

        <div class="form-group">
      <label for="direccion-recojo-adicional-integral">Dirección de recojo / código ZIP*</label>
      <input type="text" id="direccion-recojo-adicional-integral" name="Dirección de recojo o ZIP" required>
    </div>

    <div class="form-group">
      <label>Lista de empaque*</label>
      <input type="file" id="lista-empaque-integral" name="Lista de empaque" required>
    </div>
    
    <div class="form-group">
      <label>Factura Comercial (proveedor)*</label>
      <input type="file" id="factura-comercial-integral" name="Factura Comercial" required>
    </div>
    
    <div class="form-group">
      <label>Documento de transporte (encargado de transporte)*</label>
      <input type="file" id="documento-transporte-integral" name="Documento de transporte" required>
    </div>
    
    <div class="form-group">
      <label>Documento del Seguro (si corresponde)*</label>
      <input type="file" id="documento-seguro-integral" name="Documento del Seguro" required>
    </div>

    <div class="form-group">
  <label for="otro-integral">Otro</label>
  <textarea id="otro-integral" name="otro" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..."></textarea>
</div>

  </div>
</fieldset>

  <button class= "w-button cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k cnlbe3b ckt5idt c99runk c17j41yl c1q4mwb9 c1b2ax0z c1fbrktt cz2oy3c cc1y16j c1yb7w76 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4" type="submit">Solicitar cotización</button>
</form>

<script>
  document.querySelector('.form-cotizacion').addEventListener('submit', function (e) {
    // Mostramos una pantalla de "enviando..." si quieres
    setTimeout(() => {
      window.location.href = "https://www.ocraduanas.com/solicitud-enviada";
    }, 3000); // da tiempo a que el formulario se envíe
  });
<\/script>`,className:"w-html-embed"})]}),c.jsxs(T,{"data-ws-index":"2",className:"w-tab-content c1daf58q c96gbgd c1e5knv0 cube7ji",children:[c.jsxs(o,{className:"w-box ch0ny0x c1daf58q c1b8gix2 cn3oyg2 c1g5pzxy ceyphpw cqu6ovh c1xtzu1y c1qxoglk c1626814 c19ip6do c1yrxu9w c1kmw0pe",children:[c.jsx(k,{tag:"h2",className:"w-heading cegufyu c1u1tlke c103wvbq c15v397v cqtbfll c1882vc4",children:"Cotizar otros servicios"}),c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"OCR Capacita | Comercio Exterior | Trámites VUCE"})]}),c.jsx(w,{code:`<!-- Inicio formulario -->
     
    <form action= "https://formsubmit.co/operacionescargo@ocraduanas.com" method="POST" class="form-cotizacion" enctype="multipart/form-data">
    
     <!-- Configuración de FormSubmit -->
    <input type="hidden" name="_subject" value="Cotización de Otros Servicios">
    <input type="hidden" name="Formulario" value="Otros Servicios">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_next" value="https://www.ocraduanas.com/solicitud-enviada">
    
  <!-- Datos de la empresa -->
  <fieldset class="section-form">
  <legend>Datos de la empresa</legend>
    
      <div class= "title-of-container"> 
        <h3>Datos de la empresa</h3>
      </div>
      
      <div class= "form-content">    
      
      <div class="form-group">
        <label for="razon-social-otro">Razón Social*</label>
        <input type="text" id="razon-social-otro" name="Razón Social" required>
      </div>
      
      <div class="form-group">
        <label for="ruc-otro">RUC*</label>
        <input type="text" id="ruc-otro" name="RUC" required pattern="[0-9]{11}" placeholder="El RUC debe tener 11 dígitos">
      </div>
    
      <div class="form-group">
        <label for="persona-contacto-otro">Persona a contactar</label>
        <input type="text" id="persona-contacto-otro" name="Nombre del Contacto" placeholder="Nombres y apellidos">
      </div>
      
      <div class="form-group">
        <label for="email-otro">Email*</label>
        <input type="email" id="email-otro" name="Email" required>
      </div>
    
      <div class="form-group">
        <label for="telefono-otro">Teléfono / Celular*</label>
        <input type="tel" id="telefono-otro" name="Teléfono" required>
      </div>
      
      <div style="display: none;">
     <label>Deja este campo vacío</label>
     <input type="text" name="_honey">
   </div>
    
      </div>

  </fieldset>
  
  
  <!-- Sobre el Servicio -->
<fieldset class="section-form">
  <legend>Sobre el Servicio</legend>

  <div class="title-of-container">
    <h3>Sobre el Servicio</h3>
  </div>

  <div class="form-content">
        <div class="form-group">
      <label for="tipo-servicio-otro">Escoge un servicio a cotizar*</label>
        <select id="tipo-servicio-otro" name="Servicio a Cotizar" required>
        <option value="seleccion" disabled selected>Selecciona una opción</option>
        <option value="OCR Capacita">OCR Capacita</option>
        <option value="Comercio Internacional">Comercio Internacional</option>
        <option value="Trámites VUCE">Trámites VUCE</option>
      </select>
    </div>

    <div class="form-group">
  <label for="cuentanos-otro">Cuéntanos qué es lo que necesitas*</label>
  <textarea id="cuentanos-otro" name="Requerimientos" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..." required></textarea>
    </div>

  </div>
</fieldset>
  

  <button class= "w-button cqtbfll c14loo9j cwqj01v c17uyxqc c3neivu c14z6a5t c5weh5w c1fez1zb c12keurq codxh4v clpozbc c1igo5cr c1bcmo9k cnlbe3b ckt5idt c99runk c17j41yl c1q4mwb9 c1b2ax0z c1fbrktt cz2oy3c cc1y16j c1yb7w76 cqw7tyx c6jk2gv c168kc1z c1rnnpd0 cs1n3vf ckwqnw5 c1cgl1of c5j8t0 c1egibc c1oj1e1g c1qxordl cez4vp7 c1vacj0o c10as58h cqjeugx c15ned76 c1wjj2lc c1mfw19l ciywpt4" type="submit">Solicitar cotización</button>
</form>

<script>
  document.querySelector('.form-cotizacion').addEventListener('submit', function (e) {
    // Mostramos una pantalla de "enviando..." si quieres
    setTimeout(() => {
      window.location.href = "https://www.ocraduanas.com/solicitud-enviada";
    }, 3000); // da tiempo a que el formulario se envíe
  });
<\/script>`,className:"w-html-embed"})]})]})]})})]}),c.jsx(L,{children:c.jsx(M,{children:c.jsx(o,{"data-ws-tag":"footer",className:"w-box c1x32r0l c4n3cgz c1daf58q c16si6ag cw7tvpi c1s7y3u4 cr5i3yc cfhumb8",children:c.jsxs(o,{className:"w-box c166km60 c17rtxxo c1ocai34 c1g5pzxy ceyphpw cow6sb8 c1aldjk5 c1daf58q ct3mtgl ccz07aw ct22mjw c1ajodkv c1lzgef8 c1yrxu9w c4xdt99 c1kmw0pe",children:[c.jsx(o,{className:"w-box",children:c.jsx(J,{src:"/assets/ocrgroup_IXGkfDLWWSKLdsj3QjIYb.png",width:523,height:190,className:"w-image c1daf58q c1nud8hk"})}),c.jsxs(o,{className:"w-box c1daf58q c1g5pzxy ch13x5l c1fg62x4 c1rzd686 ct3mtgl c1uppuzl",children:[c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cptsnn3 ci29xkk cxy6589 c195ow69 c7cd106 ckt5idt c99runk",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Ubicación"}),c.jsx(n,{href:"https://maps.app.goo.gl/CpQ8bQJp6d8U7BY39",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsxs(t,{className:"w-text c1fez1zb c12keurq",children:["Av. Parque González Prada 797","",c.jsx("br",{}),"","Magdalena Del Mar ","",c.jsx("br",{}),"","Lima - Perú"]})})]}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cptsnn3 ci29xkk cxy6589 c195ow69 c7cd106 ckt5idt c99runk",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Horario De Atención"}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cqu6ovh c1xtzu1y",children:[c.jsxs(t,{className:"w-text c1fez1zb c12keurq",children:["Lunes - Viernes: ","",c.jsx("br",{}),"","09:00 Am - 6:00 Pm"]}),c.jsxs(t,{className:"w-text c1fez1zb c12keurq",children:["Sábado: ","",c.jsx("br",{}),"","9:00 Am - 13:00 Pm"]})]})]}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cptsnn3 ci29xkk cxy6589 c195ow69 c7cd106 ckt5idt c99runk",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Datos de Contacto"}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cqu6ovh c1xtzu1y",children:[c.jsx(n,{href:"tel:+5114536437",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"(51) 01 453-6437"})}),c.jsx(n,{href:"https://wa.me/51964104743",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"(51) 964 104 743"})}),c.jsx(n,{href:"mailto:marketing@ocraduanas.com",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"marketing@ocraduanas.com"})})]})]}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cptsnn3 ci29xkk cxy6589 c195ow69 c7cd106 ckt5idt c99runk",children:[c.jsx(t,{className:"w-text c1fez1zb c12keurq c6gs5xn",children:"Síguenos"}),c.jsxs(o,{className:"w-box c1g5pzxy ceyphpw cyswbyg cz3j363",children:[c.jsx(n,{href:"https://www.facebook.com/ocragenciadeaduanas/",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"-> Facebook "})}),c.jsx(n,{href:"https://www.instagram.com/ocr_aduanas/",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"-> Instagram "})}),c.jsx(n,{href:"https://www.linkedin.com/company/ocraduanasoficial/",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq",children:"-> LinkedIn"})})]})]}),c.jsx(o,{className:"w-box c1g5pzxy ceyphpw cptsnn3 ci29xkk cxy6589 c195ow69 c7cd106 ckt5idt c99runk",children:c.jsx(n,{href:"/libro-de-reclamaciones",className:"w-link c1qfwmz0 clpozbc cf6jbfa",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq c6gs5xn",children:"-> Libro de Reclamaciones"})})})]}),c.jsx(o,{className:"w-box c1g5pzxy ch13x5l c1xtzu1y cqu6ovh cif826s",children:c.jsx(t,{className:"w-text c1fez1zb c12keurq cva2xsp",children:"Copyright ©2024 Todos los derechos reservados | Hecho por Bufeo Tec"})})]})})})})]})}),fe=({data:e})=>{const{system:a,resources:r,url:i}=e;return c.jsx(Bc.Provider,{value:{imageLoader:B,assetBaseUrl:A,resources:r,breakpoints:se},children:c.jsx(me,{system:a},i)})},ge=Object.freeze(Object.defineProperty({__proto__:null,default:fe},Symbol.toStringTag,{value:"Module"})),be=({data:e})=>{const{pageMeta:a}=e,{origin:r}=new URL(e.url),i={"@context":"https://schema.org","@type":"WebSite",name:ec,url:r};let u=a.socialImageUrl;return a.socialImageAssetName&&(u=`${r}${B({src:a.socialImageAssetName,format:"raw"})}`),c.jsxs(c.Fragment,{children:[e.url&&c.jsx("meta",{property:"og:url",content:e.url}),c.jsx("title",{children:a.title}),c.jsx("meta",{property:"og:title",content:a.title}),a.description&&c.jsxs(c.Fragment,{children:[c.jsx("meta",{name:"description",content:a.description}),c.jsx("meta",{property:"og:description",content:a.description})]}),c.jsx("meta",{property:"og:type",content:"website"}),c.jsx("meta",{property:"og:site_name",content:ec}),u&&c.jsx("meta",{property:"og:image",content:a.socialImageUrl}),c.jsx("script",{type:"application/ld+json",dangerouslySetInnerHTML:{__html:JSON.stringify(i,null,2)}}),a.excludePageFromSearch&&c.jsx("meta",{name:"robots",content:"noindex, nofollow"}),a.custom.map(({property:l,content:d})=>c.jsx("meta",{property:l,content:d},l)),c.jsx("link",{rel:"icon",href:B({src:`${A}${de}`,width:144,height:144,fit:"pad",quality:100,format:"auto"})}),ue.map(l=>c.jsx("link",{rel:"preload",href:`${A}${l}`,as:"font",crossOrigin:"anonymous"},l)),pe.map(l=>c.jsx("link",{rel:"preload",href:`${A}${l}`,as:"image"},l))]})},ve=Object.freeze(Object.defineProperty({__proto__:null,Head:be},Symbol.toStringTag,{value:"Module"})),je={isClientRuntimeLoaded:{type:"computed",definedAtData:null,valueSerialized:{type:"js-serialized",value:!0}},onBeforeRenderEnv:{type:"computed",definedAtData:null,valueSerialized:{type:"js-serialized",value:null}},dataEnv:{type:"computed",definedAtData:null,valueSerialized:{type:"js-serialized",value:{server:!0}}},onRenderClient:{type:"standard",definedAtData:{filePathToShowToUser:"/renderer/+onRenderClient.tsx",fileExportPathToShowToUser:[]},valueSerialized:{type:"plus-file",exportValues:Hc}},Page:{type:"standard",definedAtData:{filePathToShowToUser:"/pages/cotizar-servicio/+Page.tsx",fileExportPathToShowToUser:[]},valueSerialized:{type:"plus-file",exportValues:ge}},Head:{type:"standard",definedAtData:{filePathToShowToUser:"/pages/cotizar-servicio/+Head.tsx",fileExportPathToShowToUser:[]},valueSerialized:{type:"plus-file",exportValues:ve}}};export{je as configValuesSerialized};
