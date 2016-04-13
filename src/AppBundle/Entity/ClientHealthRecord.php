<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Record
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HealthRecordRepository")
 */
class ClientHealthRecord {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ClientRecord")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientRecord;

    /**
     * @ORM\ManyToOne(targetEntity="CatInsurance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $insurance;

    /**
     * @var integer
     *
     * @ORM\Column(name="test_location", type="smallint")
     */
    private $testLocation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="preg_attempted", type="boolean")
     */
    private $pregAttempted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_birth_ctrl", type="boolean")
     */
    private $isBirthCtrl;

    /**
     * @ORM\ManyToOne(targetEntity="CatBirthControl")
     * @ORM\JoinColumn(nullable=true)
     */
    private $birthControl;

    /**
     * @var date 
     * @ORM\Column(name="lmp", type="date")
     */
    private $lmp;

    /**
     * @var date 
     * @ORM\Column(name="est_due_date", type="date")
     */
    private $estDueDate;

    /**
     *
     * @var integer
     * @ORM\Column(name="gestation", type="smallint")
     */
    private $gestation;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_past_preg", type="smallint")
     */
    private $numPastPreg;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_live_birth", type="smallint", nullable=true)
     */
    private $numLiveBirth;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_still_birth", type="smallint",nullable=true)
     */
    private $numStillBirth;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_miscarriages", type="smallint",nullable=true)
     */
    private $numMiscarriages;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_abortions", type="smallint",nullable=true)
     */
    private $numAbortions;

    /**
     *
     * @var integer
     * @ORM\Column(name="num_tubal_preg", type="smallint",nullable=true)
     */
    private $numTubalPreg;

    /**
     *
     * @var boolean
     * @ORM\Column(name="is_csection", type="boolean",nullable=true)
     */
    private $isCSection;

    /**
     *
     * @var date
     * @ORM\Column(name="date_last_birth", type="date",nullable=true)
     */
    private $dateOfLastBirth;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_pain_fever", type="boolean")
     */
    private $isPainFever;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_abnormal_bleeding", type="boolean")
     */
    private $isAbnormalBleeding;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_unusual_discharge", type="boolean")
     */
    private $isUnusualDischarge;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_headache", type="boolean")
     */
    private $isHeadache;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_severe_vomiting", type="boolean")
     */
    private $isSevereVomiting ;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_UTI", type="boolean")
     */
    private $isUTI ;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_swelling", type="boolean")
     */
    private $isSwelling;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_cramping", type="boolean")
     */
    private $isCramping;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_safety_I", type="boolean")
     */
    private $isSafetyI;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_safety_II", type="boolean")
     */
    private $isSafetyII;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_safety_III", type="boolean")
     */
    private $isSafetyIII;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_diabetes", type="boolean")
     */
    private $isDiabetes;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_heart_lung", type="boolean")
     */
    private $isHeartLungDisease;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_seizures", type="boolean")
     */
    private $isSeizures;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_thyroid_problems", type="boolean")
     */
    private $isThyroidProblems;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_high_blood_pressure", type="boolean")
     */
    private $isHighBloodPressure;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_prescription_meds", type="boolean")
     */
    private $isPrescriptionMeds;
    
    /**
     * @var string
     *
     * @ORM\Column(name="medication", type="string", length=255, nullable=true)
     */
    private $medications;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set testLocation
     *
     * @param integer $testLocation
     * @return ClientHealthRecord
     */
    public function setTestLocation($testLocation) {
        $this->testLocation = $testLocation;

        return $this;
    }

    /**
     * Get testLocation
     *
     * @return integer 
     */
    public function getTestLocation() {
        return $this->testLocation;
    }

    /**
     * Set pregAttempted
     *
     * @param integer $pregAttempted
     * @return ClientHealthRecord
     */
    public function setPregAttempted($pregAttempted) {
        $this->pregAttempted = $pregAttempted;

        return $this;
    }

    /**
     * Get pregAttempted
     *
     * @return integer 
     */
    public function getPregAttempted() {
        return $this->pregAttempted;
    }

    /**
     * Set isBirthCtrl
     *
     * @param integer $isBirthCtrl
     * @return ClientHealthRecord
     */
    public function setIsBirthCtrl($isBirthCtrl) {
        $this->isBirthCtrl = $isBirthCtrl;

        return $this;
    }

    /**
     * Get isBirthCtrl
     *
     * @return integer 
     */
    public function getIsBirthCtrl() {
        return $this->isBirthCtrl;
    }

    /**
     * Set lmp
     *
     * @param \DateTime $lmp
     * @return ClientHealthRecord
     */
    public function setLmp($lmp) {
        $this->lmp = $lmp;

        return $this;
    }

    /**
     * Get lmp
     *
     * @return \DateTime 
     */
    public function getLmp() {
        return $this->lmp;
    }

    /**
     * Set estDueDate
     *
     * @param \DateTime $estDueDate
     * @return ClientHealthRecord
     */
    public function setEstDueDate($estDueDate) {
        $this->estDueDate = $estDueDate;

        return $this;
    }

    /**
     * Get estDueDate
     *
     * @return \DateTime 
     */
    public function getEstDueDate() {
        return $this->estDueDate;
    }

    /**
     * Set gestation
     *
     * @param integer $gestation
     * @return ClientHealthRecord
     */
    public function setGestation($gestation) {
        $this->gestation = $gestation;

        return $this;
    }

    /**
     * Get gestation
     *
     * @return integer 
     */
    public function getGestation() {
        return $this->gestation;
    }

    /**
     * Set numPastPreg
     *
     * @param integer $numPastPreg
     * @return ClientHealthRecord
     */
    public function setNumPastPreg($numPastPreg) {
        $this->numPastPreg = $numPastPreg;

        return $this;
    }

    /**
     * Get numPastPreg
     *
     * @return integer 
     */
    public function getNumPastPreg() {
        return $this->numPastPreg;
    }

    /**
     * Set numLiveBirth
     *
     * @param integer $numLiveBirth
     * @return ClientHealthRecord
     */
    public function setNumLiveBirth($numLiveBirth) {
        $this->numLiveBirth = $numLiveBirth;

        return $this;
    }

    /**
     * Get numLiveBirth
     *
     * @return integer 
     */
    public function getNumLiveBirth() {
        return $this->numLiveBirth;
    }

    /**
     * Set numStillBirth
     *
     * @param integer $numStillBirth
     * @return ClientHealthRecord
     */
    public function setNumStillBirth($numStillBirth) {
        $this->numStillBirth = $numStillBirth;

        return $this;
    }

    /**
     * Get numStillBirth
     *
     * @return integer 
     */
    public function getNumStillBirth() {
        return $this->numStillBirth;
    }

    /**
     * Set numMiscarriages
     *
     * @param integer $numMiscarriages
     * @return ClientHealthRecord
     */
    public function setNumMiscarriages($numMiscarriages) {
        $this->numMiscarriages = $numMiscarriages;

        return $this;
    }

    /**
     * Get numMiscarriages
     *
     * @return integer 
     */
    public function getNumMiscarriages() {
        return $this->numMiscarriages;
    }

    /**
     * Set numAbortions
     *
     * @param integer $numAbortions
     * @return ClientHealthRecord
     */
    public function setNumAbortions($numAbortions) {
        $this->numAbortions = $numAbortions;

        return $this;
    }

    /**
     * Get numAbortions
     *
     * @return integer 
     */
    public function getNumAbortions() {
        return $this->numAbortions;
    }

    /**
     * Set numTubalPreg
     *
     * @param integer $numTubalPreg
     * @return ClientHealthRecord
     */
    public function setNumTubalPreg($numTubalPreg) {
        $this->numTubalPreg = $numTubalPreg;

        return $this;
    }

    /**
     * Get numTubalPreg
     *
     * @return integer 
     */
    public function getNumTubalPreg() {
        return $this->numTubalPreg;
    }

    /**
     * Set isCSection
     *
     * @param integer $isCSection
     * @return ClientHealthRecord
     */
    public function setIsCSection($isCSection) {
        $this->isCSection = $isCSection;

        return $this;
    }

    /**
     * Get isCSection
     *
     * @return integer 
     */
    public function getIsCSection() {
        return $this->isCSection;
    }

    /**
     * Set insurance
     *
     * @param \AppBundle\Entity\CatInsurance $insurance
     * @return ClientHealthRecord
     */
    public function setInsurance(\AppBundle\Entity\CatInsurance $insurance) {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Get insurance
     *
     * @return \AppBundle\Entity\CatInsurance 
     */
    public function getInsurance() {
        return $this->insurance;
    }


    /**
     * Set dateOfLastBirth
     *
     * @param \DateTime $dateOfLastBirth
     * @return ClientHealthRecord
     */
    public function setDateOfLastBirth($dateOfLastBirth)
    {
        $this->dateOfLastBirth = $dateOfLastBirth;

        return $this;
    }

    /**
     * Get dateOfLastBirth
     *
     * @return \DateTime 
     */
    public function getDateOfLastBirth()
    {
        return $this->dateOfLastBirth;
    }

    /**
     * Set isPainFever
     *
     * @param integer $isPainFever
     * @return ClientHealthRecord
     */
    public function setIsPainFever($isPainFever)
    {
        $this->isPainFever = $isPainFever;

        return $this;
    }

    /**
     * Get isPainFever
     *
     * @return integer 
     */
    public function getIsPainFever()
    {
        return $this->isPainFever;
    }

    /**
     * Set isAbnormalBleeding
     *
     * @param integer $isAbnormalBleeding
     * @return ClientHealthRecord
     */
    public function setIsAbnormalBleeding($isAbnormalBleeding)
    {
        $this->isAbnormalBleeding = $isAbnormalBleeding;

        return $this;
    }

    /**
     * Get isAbnormalBleeding
     *
     * @return integer 
     */
    public function getIsAbnormalBleeding()
    {
        return $this->isAbnormalBleeding;
    }

    /**
     * Set isUnusualDischarge
     *
     * @param integer $isUnusualDischarge
     * @return ClientHealthRecord
     */
    public function setIsUnusualDischarge($isUnusualDischarge)
    {
        $this->isUnusualDischarge = $isUnusualDischarge;

        return $this;
    }

    /**
     * Get isUnusualDischarge
     *
     * @return integer 
     */
    public function getIsUnusualDischarge()
    {
        return $this->isUnusualDischarge;
    }

    /**
     * Set isHeadache
     *
     * @param integer $isHeadache
     * @return ClientHealthRecord
     */
    public function setIsHeadache($isHeadache)
    {
        $this->isHeadache = $isHeadache;

        return $this;
    }

    /**
     * Get isHeadache
     *
     * @return integer 
     */
    public function getIsHeadache()
    {
        return $this->isHeadache;
    }

    /**
     * Set isSevereVomiting
     *
     * @param integer $isSevereVomiting
     * @return ClientHealthRecord
     */
    public function setIsSevereVomiting($isSevereVomiting)
    {
        $this->isSevereVomiting = $isSevereVomiting;

        return $this;
    }

    /**
     * Get isSevereVomiting
     *
     * @return integer 
     */
    public function getIsSevereVomiting()
    {
        return $this->isSevereVomiting;
    }

    /**
     * Set isUTI
     *
     * @param integer $isUTI
     * @return ClientHealthRecord
     */
    public function setIsUTI($isUTI)
    {
        $this->isUTI = $isUTI;

        return $this;
    }

    /**
     * Get isUTI
     *
     * @return integer 
     */
    public function getIsUTI()
    {
        return $this->isUTI;
    }

    /**
     * Set isSwelling
     *
     * @param integer $isSwelling
     * @return ClientHealthRecord
     */
    public function setIsSwelling($isSwelling)
    {
        $this->isSwelling = $isSwelling;

        return $this;
    }

    /**
     * Get isSwelling
     *
     * @return integer 
     */
    public function getIsSwelling()
    {
        return $this->isSwelling;
    }

    /**
     * Set isCramping
     *
     * @param integer $isCramping
     * @return ClientHealthRecord
     */
    public function setIsCramping($isCramping)
    {
        $this->isCramping = $isCramping;

        return $this;
    }

    /**
     * Get isCramping
     *
     * @return integer 
     */
    public function getIsCramping()
    {
        return $this->isCramping;
    }

    /**
     * Set isSafetyI
     *
     * @param integer $isSafetyI
     * @return ClientHealthRecord
     */
    public function setIsSafetyI($isSafetyI)
    {
        $this->isSafetyI = $isSafetyI;

        return $this;
    }

    /**
     * Get isSafetyI
     *
     * @return integer 
     */
    public function getIsSafetyI()
    {
        return $this->isSafetyI;
    }

    /**
     * Set isSafetyII
     *
     * @param integer $isSafetyII
     * @return ClientHealthRecord
     */
    public function setIsSafetyII($isSafetyII)
    {
        $this->isSafetyII = $isSafetyII;

        return $this;
    }

    /**
     * Get isSafetyII
     *
     * @return integer 
     */
    public function getIsSafetyII()
    {
        return $this->isSafetyII;
    }

    /**
     * Set isSafetyIII
     *
     * @param integer $isSafetyIII
     * @return ClientHealthRecord
     */
    public function setIsSafetyIII($isSafetyIII)
    {
        $this->isSafetyIII = $isSafetyIII;

        return $this;
    }

    /**
     * Get isSafetyIII
     *
     * @return integer 
     */
    public function getIsSafetyIII()
    {
        return $this->isSafetyIII;
    }

    /**
     * Set isDiabetes
     *
     * @param integer $isDiabetes
     * @return ClientHealthRecord
     */
    public function setIsDiabetes($isDiabetes)
    {
        $this->isDiabetes = $isDiabetes;

        return $this;
    }

    /**
     * Get isDiabetes
     *
     * @return integer 
     */
    public function getIsDiabetes()
    {
        return $this->isDiabetes;
    }

    /**
     * Set isHeartLungDisease
     *
     * @param integer $isHeartLungDisease
     * @return ClientHealthRecord
     */
    public function setIsHeartLungDisease($isHeartLungDisease)
    {
        $this->isHeartLungDisease = $isHeartLungDisease;

        return $this;
    }

    /**
     * Get isHeartLungDisease
     *
     * @return integer 
     */
    public function getIsHeartLungDisease()
    {
        return $this->isHeartLungDisease;
    }

    /**
     * Set isSeizures
     *
     * @param integer $isSeizures
     * @return ClientHealthRecord
     */
    public function setIsSeizures($isSeizures)
    {
        $this->isSeizures = $isSeizures;

        return $this;
    }

    /**
     * Get isSeizures
     *
     * @return integer 
     */
    public function getIsSeizures()
    {
        return $this->isSeizures;
    }

    /**
     * Set isThyroidProblems
     *
     * @param integer $isThyroidProblems
     * @return ClientHealthRecord
     */
    public function setIsThyroidProblems($isThyroidProblems)
    {
        $this->isThyroidProblems = $isThyroidProblems;

        return $this;
    }

    /**
     * Get isThyroidProblems
     *
     * @return integer 
     */
    public function getIsThyroidProblems()
    {
        return $this->isThyroidProblems;
    }

    /**
     * Set isHighBloodPressure
     *
     * @param integer $isHighBloodPressure
     * @return ClientHealthRecord
     */
    public function setIsHighBloodPressure($isHighBloodPressure)
    {
        $this->isHighBloodPressure = $isHighBloodPressure;

        return $this;
    }

    /**
     * Get isHighBloodPressure
     *
     * @return integer 
     */
    public function getIsHighBloodPressure()
    {
        return $this->isHighBloodPressure;
    }

    /**
     * Set isPrescriptionMeds
     *
     * @param integer $isPrescriptionMeds
     * @return ClientHealthRecord
     */
    public function setIsPrescriptionMeds($isPrescriptionMeds)
    {
        $this->isPrescriptionMeds = $isPrescriptionMeds;

        return $this;
    }

    /**
     * Get isPrescriptionMeds
     *
     * @return integer 
     */
    public function getIsPrescriptionMeds()
    {
        return $this->isPrescriptionMeds;
    }

    /**
     * Set medications
     *
     * @param string $medications
     * @return ClientHealthRecord
     */
    public function setMedications($medications)
    {
        $this->medications = $medications;

        return $this;
    }

    /**
     * Get medications
     *
     * @return string 
     */
    public function getMedications()
    {
        return $this->medications;
    }

    /**
     * Set clientRecord
     *
     * @param \AppBundle\Entity\ClientRecord $clientRecord
     * @return ClientHealthRecord
     */
    public function setClientRecord(\AppBundle\Entity\ClientRecord $clientRecord)
    {
        $this->clientRecord = $clientRecord;

        return $this;
    }

    /**
     * Get clientRecord
     *
     * @return \AppBundle\Entity\ClientRecord 
     */
    public function getClientRecord()
    {
        return $this->clientRecord;
    }

    /**
     * Set birthControl
     *
     * @param \AppBundle\Entity\CatBirthControl $birthControl
     * @return ClientHealthRecord
     */
    public function setBirthControl(\AppBundle\Entity\CatBirthControl $birthControl = null)
    {
        $this->birthControl = $birthControl;

        return $this;
    }

    /**
     * Get birthControl
     *
     * @return \AppBundle\Entity\CatBirthControl 
     */
    public function getBirthControl()
    {
        return $this->birthControl;
    }
}
