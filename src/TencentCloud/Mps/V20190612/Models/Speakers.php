<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of characters.
 *
 * @method string getSpeakerId() Obtain <p>Unique character ID.</p>
 * @method void setSpeakerId(string $SpeakerId) Set <p>Unique character ID.</p>
 * @method string getVoiceId() Obtain <p>Bound voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Bound voice ID.</p>
 * @method string getGender() Obtain <p>Gender: male/female. Default: male.</p>
 * @method void setGender(string $Gender) Set <p>Gender: male/female. Default: male.</p>
 * @method string getAgeGroup() Obtain <p>Age segment: child/teenager/youth/middle_aged/senior. Default: youth.</p>
 * @method void setAgeGroup(string $AgeGroup) Set <p>Age segment: child/teenager/youth/middle_aged/senior. Default: youth.</p>
 * @method string getDescription() Obtain <p>Character description.</p>
 * @method void setDescription(string $Description) Set <p>Character description.</p>
 * @method array getNameTerms() Obtain <p>Glossary of character names.</p>
 * @method void setNameTerms(array $NameTerms) Set <p>Glossary of character names.</p>
 */
class Speakers extends AbstractModel
{
    /**
     * @var string <p>Unique character ID.</p>
     */
    public $SpeakerId;

    /**
     * @var string <p>Bound voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Gender: male/female. Default: male.</p>
     */
    public $Gender;

    /**
     * @var string <p>Age segment: child/teenager/youth/middle_aged/senior. Default: youth.</p>
     */
    public $AgeGroup;

    /**
     * @var string <p>Character description.</p>
     */
    public $Description;

    /**
     * @var array <p>Glossary of character names.</p>
     */
    public $NameTerms;

    /**
     * @param string $SpeakerId <p>Unique character ID.</p>
     * @param string $VoiceId <p>Bound voice ID.</p>
     * @param string $Gender <p>Gender: male/female. Default: male.</p>
     * @param string $AgeGroup <p>Age segment: child/teenager/youth/middle_aged/senior. Default: youth.</p>
     * @param string $Description <p>Character description.</p>
     * @param array $NameTerms <p>Glossary of character names.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("AgeGroup",$param) and $param["AgeGroup"] !== null) {
            $this->AgeGroup = $param["AgeGroup"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NameTerms",$param) and $param["NameTerms"] !== null) {
            $this->NameTerms = [];
            foreach ($param["NameTerms"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->NameTerms, $obj);
            }
        }
    }
}
