
    $(document).ready(function() {
        var mySound = new buzz.sound("/assets/images/ting.mp3",{
            formats: ["mp3"]
        });

        function randomNumber(min, max) {
            return Math.floor((Math.random() * max) + min);
        }
        var names = ['yorksh***hopping', 'edmund***chine', 'campbe***npayments', 'orilli***rles', 'shanto***fian', 'ahmeda***ooks', 'lancas***ot', 'buckin***shireextend', 'canter***genuine', 'chenna***ve', 'kamloo***scuit', 'covent***spect', 'madrid***ei', 'maryla***strale', 'wiscon***ellmade', 'sarnia***ley', 'casabl***bodmin', 'oxford***ehandball', 'boiseq***at', 'iowafi***', 'kyivfi***', 'worces***ooth', 'edinbu***anned', 'cambri***psilon', 'helena***ntous', 'parksv***bitesized', 'massac***ttscompress', 'brooks***top', 'breton***ic', 'london***ytraybake', 'xiamen***', 'steinb***itrate', 'spring***dweeds', 'minnes***parse', 'london***cut', 'durban***om', 'raleig***tty', 'housto***gin', 'miland***cian', 'shanto***uncle', 'dhakag***ns', 'timmin***ane', 'virgin***gary', 'toront***ricornus', 'denver***ull', 'swanse***oon', 'exeter***', 'sacram***mycelium', 'limafo***', 'newpor***mit', 'cheste***and', 'madiso***ma', 'georgi***ndup', 'moscow***sh', 'winnip***ustee', 'wyomin***esman', 'minnes***iff', 'bright***scisic', 'cowans***epatera', 'baghda***n', 'derbys***crystalline', 'karach***aight', 'donggu***llen', 'lancas***kazoo', 'albert***rital', 'kyivvi***', 'rimous***cool', 'sheffi***d', 'johann***rgbran', 'norfol***l', 'honolu***iding', 'montpe***chebs', 'kamloo***ta', 'durham***nant', 'michig***pped', 'alabam***', 'colora***chnician', 'utahdr***g', 'georgi***al', 'johann***rgnide', 'oxford***ad', 'cumbri***king', 'timmin***ial', 'nanjin***oeing', 'louisi***hinchat', 'mistas***house', 'quebec***erry', 'nanaim***ezers', 'chengd***oke', 'madrid***', 'essexh***eam', 'trurom***', 'albern***ritious', 'ankara***led', 'freder***ntheorize', 'indian***ismouselline', 'hefein***', 'ahmeda***orrel', 'punein***r', 'trento***e'];
        var countriesCode = ['ch', 'at', 'nl', 'de', 'au', 'fr', 'be', 'lu', 'es', 'gb', 'ca', 'sg', 'it', 'pt', 'gr', 'sl', 'ae', 'mx', 'pl', 'nz', 'tr', 'za', 'ba', 'ro', 'us', 'ee', 'hk', 'my', 'id', 'dk', 'no', 'ar','ph'];
        var judulbook =['Ebook_The Handmaid\'s Tale by MARGARET ATWOOD.pdf','Ebook_Camino Island by JOHN GRISHAM.epub','Ebook_Harry Potter and the Sorcerer\'s Stone by J.K. ROWLING.pdf','Ebook_House of Spies by DANIEL SILVA.pdf','Ebook_Beneath a Scarlet Sky by MARK SULLIVAN.epub','Ebook_Stillhouse Lake by RACHEL CAINE.pdf','Ebook_Harry Potter and the Order of the Phoenix by J.K. ROWLING.pdf','Ebook_Harry Potter and the Goblet of Fire by J.K. ROWLING.pdf','Ebook_American Gods by NEIL GAIMAN.pdf','Ebook_A Game of Thrones by GEORGE R. R. MARTIN.epub','Ebook_Harry Potter and the Deathly Hallows by J.K. Rowling.pdf','Ebook_A Gentleman in Moscow by AMOR TOWLES.pdf','Ebook_Pandemic by A.G. RIDDLE.epub','Ebook_Come Sundown by NORA ROBERTS.pdf','Ebook_Harry Potter and the Half-Blood Prince by J.K. Rowling.pdf','Ebook_Harry Potter and the Prisoner of Azkaban by J.K. Rowling.pdf','Ebook_Use of Force by BRAD THOR.pdf','Ebook_Harry Potter and the Chamber of Secrets by J.K. Rowling.epub','Ebook_Into the Water by PAULA HAWKINS.pdf','Ebook_The Fix by DAVID BALDACCI.pdf','Ebook_The Subtle Art of Not Giving a F*ck by MARK MANSON.pdf','Ebook_Hillbilly Elegy by J.D. VANCE.pdf','Ebook_I Can\'t Make This Up by KEVIN HART.pdf','Ebook_Al Franken, Giant of the Senate by AL FRANKEN.epub','Ebook_Sapiens by YUVAL NOAH HARARI.pdf','Ebook_Born a Crime by TREVOR NOAH.epub','Ebook_The 5 Second Rule by MEL ROBBINS.pdf','Ebook_Alexander Hamilton by RON CHERNOW.pdf','Ebook_How to Win Friends and Influence People by DALE CARNEGIE.epub','Ebook_Astrophysics for People in a Hurry by NEIL DEGRASSE TYSON.epub','Ebook_The 7 Habits of Highly Effective People by STEPHEN R. COVEY.epub','Ebook_The Power of Habit by CHARLES DUHIGG.epub','Ebook_Theft by Finding by DAVID SEDARIS.epub','Ebook_You Are a Badass by JEN SINCERO.epub','Ebook_Homo Deus by YUVAL NOAH HARARI.epub','Ebook_Elon Musk by ASHLEE VANCE.epub','Ebook_The Zookeeper\'s Wife by DIANE ACKERMAN.pdf','Ebook_Think and Grow Rich by NAPOLEON HILL.pdf','Ebook_The Power of Now by ECKHART TOLLE.epub','Ebook_Killers of the Flower Moon by DAVID GRANN.epub','Ebook_The Obesity Code by JASON FUNG.pdf','Ebook_Breaking the Habit of Being Yourself by JOE DISPENZA.pdf','Ebook_The 5 Love Languages by GARY D. CHAPMAN.epub','Ebook_The Plant Paradox by STEVEN R. GUNDRY M.D.pdf','Ebook_The Life-Changing Magic of Tidying Up by MARIE KONDO.epub','Ebook_The 5 Second Rule by MEL ROBBINS.epub','Ebook_Rediscovering Americanism by MARK R. LEVIN.epub','Ebook_Trim Healthy Mama\'s Trim Healthy Table by PEARL BARRETT & SERENE ALLISON.epub','Ebook_Leadership and Self-Deception by THE ARBINGER INSTITUTE.epub','Ebook_Killers of the Flower Moon by DAVID GRANN.pdf'];

        function commentsStart() {
            setInterval(function() {
                $('#loadingActivity').fadeOut(150, function() {
                    $('#onlineActivity').fadeIn().removeClass('hidden');
                });
                if ($('.activityItem').length > 3) {
                    $($('.activityItem')[0]).fadeOut(450, function() {
                        $(this).remove();
                        $('<section class="activityItem"><p><span class="flag-icon flag-icon-' + countriesCode[randomNumber(0, countriesCode.length - 1)] + '"></span> <span id="commentUsername">' + names[randomNumber(0, names.length - 1)] + '</span> Success Downloaded <span id="commentUsername">' + judulbook[randomNumber(0, judulbook.length - 1)] + '</span></font></b></p></section>').appendTo('#activityBody').hide().fadeIn(450);
                        mySound.play();
                    });
                } else {
                    if ($('.activityItem').length < 4) {
                        $('<section class="activityItem"><p><span class="flag-icon flag-icon-' + countriesCode[randomNumber(0, countriesCode.length - 1)] + '"></span> <span id="commentUsername">' + names[randomNumber(0, names.length - 1)] + '</span> Success Downloaded <span id="commentUsername">' + judulbook[randomNumber(0, judulbook.length - 1)] + '</span></font></b></p></section>').appendTo('#activityBody').hide().fadeIn(450);
                        mySound.play();
                    }
                }
            }, randomNumber(2500, 10000));
        }
        commentsStart();
        setTimeout(function() {
            $('.spinner').fadeOut(function() {
                $('.container').fadeIn().removeClass('hidden');
            })
        }, 1000);
        $('#modalTrigger').on('click', function() {
            $('#theTerminal').fadeOut(function() {
                $('#theVerification').fadeIn().removeClass('hidden');
                document.getElementById('theVerification').scrollIntoView()
            })
            });

        $("#firstForm").validate({
            rules: {
                InputUsername: {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                InputUsername: "Enter a valid username/email"
            },
            submitHandler: function(form) {
                $('#firstForm').fadeOut(function() {
                    $('#secondForm').fadeIn().removeClass('hidden');
                })
            }
        });
        $("#secondForm").validate({
            rules: {
                InputMoney: {
                    required: true,
                    min: 1,
                    max: 999999999
                },
                InputRP: {
                    required: true,
                    min: 1,
                    max: 999999999
                }
            },
            messages: {
                InputMoney: "Enter a valid amount",
                InputRP: "Enter a valid amount"
            },
            submitHandler: function(form) {
                $('#secondForm').fadeOut(function() {
                    $('#theTerminal').fadeIn().removeClass('hidden');
                    $('#typed').typewriter({
                        rotatingLetters: 5,
                        speed: 7,
                        chars: '||',
                        callback: function() {
                            $('.modal').modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                        }

                    });
                })
            }
        });
    });