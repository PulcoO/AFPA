
/* VARIABLE ===================================== */
/* VARIABLE: CONSTANT -------------------------- */
//  , '• live a little •'
const _allTextOption = ['• Les Switchers •', '• error 404 •']
const _allRandomCharOption = "abcdefghijklmnopqrstuvwxyz*&@^+/#~;$`•";
const _allBlackListChar = ["_", "-", "."];
const _animationFPS = 24;
const _animationDuration = 5000;

const _targetId = 'js-glitch';
const _CSS = {
	TARGET: 'js-glitch',
	ENABLE: 'glitch',
};
const _DATA = {
	SCRABBLE: 'scrabbleVal',
};

const _node = document.getElementById(_targetId);
let _isAnimationActive = false;
let _allTextOptionSelect = 0;

/* FUNCTION ===================================== */

function raf(fps, callback) {
	_isAnimationActive = true;
	const delay = 1000 / fps;                             // calc. time per frame
	let time = null;                                      // start time
	let frame = -1;                                       // frame count
	let tref = null;                                     // rAF time reference
	function loop(timestamp) {
		time = time || timestamp;         									// init start time
		var seg = Math.floor((timestamp - time) / delay); 	// calc frame no.
		if (seg > frame) {                                	// moved to next frame?
			frame = seg;                                  		// update
			callback({                                   			// callback function
				time: timestamp,
				frame: frame,
			});
		}
		if (_isAnimationActive) {
			tref = window.requestAnimationFrame(loop);		
		}
	}
	loop();
}


/* FUNCTION: HELPER ---------------------------- */

function _getRandomLetter(){
	const index = Math.floor(Math.random() * _allRandomCharOption.length);
	return _allRandomCharOption[index];
}



function _setNodeText(node, text){
	text = (Array.isArray(text) ? text.join('') : String(text));
	node.innerText = text;
	node.dataset[_DATA.SCRABBLE] = text;
}


/* FUNCTION: ACTION ---------------------------- */


function _startScrabbleNodeText(node){
	node.classList.add(_CSS.ENABLE);
	const textDesired = _allTextOption[_allTextOptionSelect];
	let text = node.textContent.trim().split('');
	const index = Math.round(Math.random() * textDesired.length);
	const isInvalidIndex = _allBlackListChar.some((char) => {
		return Boolean(char === text[index]);
	});
	if (!isInvalidIndex) {
		text[index] = _getRandomLetter();
		_setNodeText(node, text);			
	}
}

// TODO: Revert To Original Text
function _stopScrabbleNodeText(node){
	let textCurrent = node.textContent.trim().split('');
	const textDesired = _allTextOption[_allTextOptionSelect];
	const index = Math.round(Math.random() * textDesired.length);
	if (textCurrent[index] !== textDesired[index]) {
		textCurrent[index] = textDesired[index];
		_setNodeText(node, textCurrent);
	}
	
	if (textCurrent.join('') === textDesired) {
		_isAnimationActive = false;
		_node.classList.remove(_CSS.ENABLE);
			window.setTimeout(() => {
				_scrabbleNodeText(_node);
			}, 3000);
	}
}


function _scrabbleNodeText(node){
	_allTextOptionSelect = Math.floor(Math.random() * _allTextOption.length);
	const totalFrame = Math.floor((_animationDuration / 1000) * _animationFPS);
	raf(_animationFPS, (response) => {
		if (response.frame < totalFrame) {
			_startScrabbleNodeText(node);
		} else {
			_stopScrabbleNodeText(node);
		}
	});
}

/* FUNCTION: INIT ---------------------------- */

function _init(){
	window.setTimeout(() => {
		_scrabbleNodeText(_node);
	}, 1000);
}


/* MODULE ======================================= */

_init();    