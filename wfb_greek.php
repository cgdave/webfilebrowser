﻿// Greek (Balaskas Euaggelos / ebalaskas@cs.teiath.gr)

$dateformat = "d-m-Y H:i:s";

$messages = array(
   "rlm1"=>"Χρειάζεται πιστοποίηση",
   "trc0"=>"Κενό",
   "trc1"=>"Ο Κάδος Ανακύκλωσης άδειασε",
   "trc2"=>"Ο Κάδος Ανακύκλωσης δεν έχει αδειάσει εντελώς",
   "trc3"=>"Αδύνατη η ανάγνωση του Κάδου Ανακύκλωσης",
   "trc9"=>"’δεισμα Κάδου Ανακύκλωσης",
   "rst0"=>"Επαναφορά",
   "rst1"=>"Εσφαλμένο όνομα για αρχείο για επαναφορά",
   "rst2"=>"Η επαναφορά λειτουργεί μόνο μέσα στον Κάδο Ανακύκλωσης",
   "rst3"=>"Όλα τα επιλεγμένα αρχεία επαναφέρθηκαν",
   "rst4"=>"Αδύνατη η επαναφορά του αρχείου %VAR1%",
   "rst5"=>"Δεν υπάρχει όνομα αρχείου για επαναφορά",
   "rst9"=>"Επαναφορά <b>επιλεγμένου</b> αρχείου",
   "mov0"=>"Μετακίνηση",
   "mov1"=>"Μη αποδεκτό όνομα για αρχείο(α) ή κατάλογο(οι) να μετακινηθούν",
   "mov2"=>"Μη αποδεκτή διαδρομή καταλόγου για αρχείο(α) ή κατάλογο(οι) να μετακινηθούν",
   "mov3"=>"Όλα τα επιλεγμένα αρχεία ή καταλόγοι μετακινήθηκαν στο %VAR1%",
   "mov4"=>"Αδύνατη η μετακίνηση του αρχείου ή του καταλογου %VAR1% στο %VAR2%",
   "mov5"=>"Ο κατάλογος προορισμού %VAR1% δεν είναι έγκυρος κατάλογος",
   "mov6"=>"Δεν υπάρχει το όνομα του καταλόγου προορισμού για την μετακίνηση αρχείου(ων) ή καταλόγου(ων)",
   "mov9"=>"Μετακίνηση <b>επιλεγμένου</b> αρχείου(ων) ή καταλόγου(ων) στον <b>επιλεγμένο</b> κατάλογο",
   "ren0"=>"Μετονομασία",
   "ren1"=>"Εσφαλμένο όνομα αρχείου για μετονομασία",
   "ren2"=>"Μη αποδεκτό Νέο όνομα για την μετονομασία του αρχείου",
   "ren3"=>"Το αρχείο %VAR1% μετονομάστηκε σε %VAR2%",
   "ren4"=>"Αδύνατη η μετονομασία του αρχείου %VAR1% σε %VAR2%",
   "ren5"=>"Δεν υπάρχει όνομα για το νέο όνομα της μετονομασίας του αρχείου",
   "ren9"=>"Μετονομασία <b>επιλεγμένου</b><br>αρχείου ή καταλόγου σε",
   "cpy0"=>"Αντιγραφή",
   "cpy1"=>"Μη αποδεκτό όνομα για την αντιγραφή του αρχείο",
   "cpy2"=>"Μη αποδεκτό όνομα αντιγραφής για αρχείο να αντιγραφεί",
   "cpy3"=>"Αρχείο %VAR1% αντιγράφτηκε σε %VAR2%",
   "cpy4"=>"Αδύνατο να αντιγραφεί το αρχείο %VAR1% σε %VAR2%",
   "cpy5"=>"Δεν μπορεί γίνει η αντιγραφή καταλόγων",
   "cpy6"=>"Δεν έχει δοθεί όνομα ή όνομα αντιγραφής για να αντιγραφεί το αρχείο",
   "cpy9"=>"Αντιγραφεί <b>επιλεγμένου</b> αρχείου σε",
   "als0"=>"Ψευδώνυμο",
   "als1"=>"Μη αποδεκτό όνομα για ψευδώνυμο αρχείου",
   "als2"=>"Το αρχείο %VAR1% απέκτησε ψευδώνυμο",
   "als3"=>"Αδύνατο να αποκτήσει ψευδώνυμο το αρχείο %VAR1%",
   "als4"=>"Το αρχείο %VAR1% έχασε το ψευδώνυμο",
   "als5"=>"Το αρχείο %VAR1% δεν απέκτησε ψευδώνυμο",
   "als6"=>"Οι κατάλογοι δεν μπορούν να έχουν ψευδώνυμα",
   "als7"=>"Δεν υπάρχει όνομα για το ψευδώνυμο του αρχείου",
   "als9"=>"Ψευδώνυμο <b>επιλεγμένου</b> αρχείου με",
   "cre0"=>"Δημιουργία αρχείου",
   "cre1"=>"Μη αποδεκτό όνομα για δημιουργία αρχείου",
   "cre2"=>"Το αρχείο %VAR1% δημιουργήθηκε",
   "cre3"=>"Αδύνατο η δημιουργία αρχείου %VAR1%",
   "cre4"=>"Δεν υπάρχει όνομα για δημιουργία αρχείου",
   "cre9"=>"Δημιουργία νέου αρχείου",
   "sav1"=>"Μη αποδεκτό όνομα για την αποθήκευση αρχείου",
   "sav2"=>"Αδύνατη η αποθήκευση αρχείου %VAR1%",
   "sav3"=>"Δεν υπάρχει όνομα για την αποθήκευση αρχείου",
   "sav4"=>"Αποθήκευση",
   "sav5"=>"Ακύρωση",
   "sav6"=>"DOS / WINDOWS Διαμόρφωση",
   "sav7"=>"UNIX Διαμόρφωση",
   "del0"=>"Διαγραφή",
   "del1"=>"Μη αποδεκτό όνομα για την διαγραφή αρχείου",
   "del4"=>"Όλα τα επιλεγμένα αρχεια μετακινήθηκαν στον Κάδο Ανακύκλωσης",
   "del5"=>"Αδύνατη η μετακίνηση αρχείου %VAR1% στον Κάδο Ανακύκλωσης",
   "del6"=>"Δεν υπάρχει όνομα για την διαγραφή του αρχείου",
   "del7"=>"Ο κατάλογος %VAR1% δεν είναι ένα αρχείο",
   "del9"=>"Διαγραφή <b>επιλεγμένου</b> αρχείου(ων)",
   "rmd0"=>"Απομάκρυνση",
   "rmd1"=>"Μη αποδεκτό όνομα για κατάλογο να απομακρυνθεί",
   "rmd2"=>"Ο κατάλογος %VAR1% απομακρύνθηκε",
   "rmd3"=>"Αδύνατο να απομακρυνθεί ο κατάλογος %VAR1% (δεν είναι άδειος;)",
   "rmd4"=>"Δεν υπάρχει όνομα για κατάλογο να απομακρυνθεί",
   "rmd5"=>"Το αρχείο %VAR1% δεν είναι ένας κατάλογος",
   "rmd9"=>"Απομάκρυνση <b>επιλεγμένου(ων)</b> καταλόγου",
   "fup0"=>"Ανέβασμα",
   "fup1"=>"Μη αποδεκτό όνομα αρχείου για ανέβασμα",
   "fup2"=>"Το ανέβασμα του αρχείου %VAR1% έγινε επιτυχώς",
   "fup3"=>"Το ανέβασμα του αρχείου %VAR1% ακυρώθηκε",
   "fup4"=>"Δεν υπάρχει όνομα αρχείου για ανέβασμα",
   "fup9"=>"Ανέβασμα αρχείου",
   "uup0"=>"Ανέβασμα URL",
   "uup1"=>"Μη αποδεκτό URL για ανέβασμα",
   "uup2"=>"URL %VAR1% ανέβηκε στο %VAR2%",
   "uup3"=>"Αδύνατο το ανέβασμα του %VAR1%",
   "uup4"=>"Δεν υπάρχει URL για ανέβασμα",
   "uup9"=>"Ανέβασμα αρχείου από URL",
   "mkd0"=>"Δημιουργία καταλόγου",
   "mkd1"=>"Μη αποδεκτό όνομα για την δημιουργία καταλόγου",
   "mkd2"=>"Κατάλογος %VAR1% δημιουργήθηκε",
   "mkd3"=>"Αδύνατο να δημιουργηθεί ο κατάλογος %VAR1%",
   "mkd4"=>"Δεν υπάρχει όνομα για την δημιουργία καταλόγου",
   "mkd9"=>"Δημιουργία νέου καταλόγου",
   "edt1"=>"Μη αποδεκτό όνομα αρχείου για τροποποίηση",
   "edt2"=>"Μη αποδεκτό όνομα αρχείου για εμφάνιση",
   "edt3"=>"Μη αποδεκτή κατάληξη αρχείου για τροποποίηση",
   "edt4"=>"Μη αποδεκτή κατάληξη αρχείου για εμφάνιση",
   "edt5"=>"Αδύνατο να διαβαστεί το αρχείο %VAR1%",
   "edt6"=>"Δεν υπάρχει όνομα αρχείου για τροποποίηση",
   "edt7"=>"Δεν υπάρχει όνομα αρχείου για εμφάνιση",
   "edt8"=>"Τροποποίηση αρχείου",
   "edt9"=>"Εμφάνιση αρχείου",
   "edt10"=>"Τ", // Τ(ροποποίηση - ενέργεια)
   "edt11"=>"Ε", // Ε(μφάνιση - ενέργεια)
   "edt12"=>"Επιστροφή στην λίστα αρχείων",
   "dir1"=>"Αδύνατη η ανάγνωση καταλόγου",
   "dir2"=>"Ριζικός Κατάλογος",
   "dir3"=>"Γονικός Κατάλογος",
   "dir4"=>"Κάδος Ανακύκλωσης",
   "dir5"=>"Υπό-κατάλογος",
   "tab1"=>"Επι", // Επι(λογή)
   "tab2"=>"Σε",
   "tab3"=>"Όνομα",
   "tab4"=>"Μέγεθος",
   "tab5"=>"Ημερομηνία",
   "tab6"=>"Δικαιώματα",
   "tab7"=>"Ιδιοκτήτης",
   "tab8"=>"Ομάδα",
   "tab9"=>"Μόνο<br>Ανάγνωση",
   "tab10"=>"Ενέργεια",
   "tab11"=>"κατάλογοι",
   "tab12"=>"αρχεία",
   "tab13"=>"Kb", // K(ilo)b(ytes)
   "tab14"=>"Ναι",
   "act1"=>"’γνωστη ή ακατάλληλη ενέργεια",
   "act2"=>"Είσαστε σίγουροι" ,
   "act3"=>"Δεν υπάρχει αρχείο ή κατάλογος προορισμού επιλεγμένου",
   "act4"=>"Δεν επιλέχτηκε αρχείο",
   "act5"=>"Δεν υπάρχει νέο όνομα για μετονομασία αρχείου",
   "act6"=>"Δεν υπάρχει όνομα αντιγραφής για να αντιγραφεί το αρχείο",
   "act7"=>"Πάρα πολλά επιλεγμένα αρχεία ή κατάλογοι",
   "act8"=>"Επιλογή μόνο αρχείων",
   "act9"=>"Επιλογή ενός καταλόγου",
   "sch1"=>"Αναζήτηση αρχείου(ων) από την συγκεκριμένο κατάλογο",
   "sch2"=>"Αναζήτηση",
   "sch3"=>"Δεν βρέθηκαν αρχεία να ταιριάζουν %VAR1%",
   "sch4"=>"Αναζήτηση αποτελεσμάτων για %VAR1%",
   "sch5"=>"Κατάλογος αναζήτησης",
   "sch6"=>"Δεν βρέθηκε δείγμα",
   "sch7"=>"Χρησιμοποίηση κανονικής έκφρασης",
   "sch8"=>"Πήγαινε στον κατάλογο του <b>επιλεγμένου</b> αρχείου",
   "sch9"=>"Πήγαινε στον κατάλογο",
   "dwn1"=>"Κ", // Κ(ατέβασμα - ενέργεια)
   "dwn2"=>"Μη αποδεκτό όνομα για το κατέβασμα του αρχείου",
   "dwn3"=>"Αδύνατο το κατέβασμα του αρχείου",
   "dwn4"=>"Δεν υπάρχει όνομα αρχείου για κατέβασμα",
   "dwn5"=>"Αποθήκευση αρχείου",
   "inf1"=>"Ταξινόμηση αρχείων με βάση το όνομα",
   "inf2"=>"Ταξινόμηση αρχείων με βάση το μέγεθος",
   "inf3"=>"Ταξινόμηση αρχείων με βάση την ημερομηνία",
   "inf4"=>"Πήγαινε στον κατάλογο",
   "inf5"=>"Εμφάνιση αρχείου",
   "inf6"=>"Πήγαινε στον ριζικό κατάλογο",
   "inf7"=>"Πήγαινε στον γονικό κατάλογο",
   "inf8"=>"Πήγαινε στον Κάδο Ανακύκλωσης"
);
