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
 * Face Recognition result
 *
 * @method string getId() Obtain Unique identification ID of the figure.
 * @method void setId(string $Id) Set Unique identification ID of the figure.
 * @method string getType() Obtain Figure library type, indicates which figure library the recognized figure comes from.
<li>Default: default figure library;</li>
<li>UserDefine: user-defined character library.</li>
 * @method void setType(string $Type) Set Figure library type, indicates which figure library the recognized figure comes from.
<li>Default: default figure library;</li>
<li>UserDefine: user-defined character library.</li>
 * @method string getName() Obtain Figure name.
 * @method void setName(string $Name) Set Figure name.
 * @method array getSegmentSet() Obtain Result set of segments that contain people.
 * @method void setSegmentSet(array $SegmentSet) Set Result set of segments that contain people.
 * @method string getGender() Obtain Gender
<li>Male: man</li>
<li>Female: woman.</li>
 * @method void setGender(string $Gender) Set Gender
<li>Male: man</li>
<li>Female: woman.</li>
 * @method string getBirthday() Obtain Date of birth of a person.
 * @method void setBirthday(string $Birthday) Set Date of birth of a person.
 * @method string getProfession() Obtain Occupation or position.
 * @method void setProfession(string $Profession) Set Occupation or position.
 * @method string getSchoolOfGraduation() Obtain Graduation institution of the person.
 * @method void setSchoolOfGraduation(string $SchoolOfGraduation) Set Graduation institution of the person.
 * @method string getAbstract() Obtain Figure description.
 * @method void setAbstract(string $Abstract) Set Figure description.
 * @method string getPlaceOfBirth() Obtain Birthplace or place of origin of a person.
 * @method void setPlaceOfBirth(string $PlaceOfBirth) Set Birthplace or place of origin of a person.
 * @method string getPersonType() Obtain Person type:
<li>Politician: official.</li>
<li>Artist: artist.</li>
 * @method void setPersonType(string $PersonType) Set Person type:
<li>Politician: official.</li>
<li>Artist: artist.</li>
 * @method string getRemark() Obtain Sensitivity labeling:
<li>NORMAL: Normal;</li>
<li>Sensitive: sensitive.</li>
 * @method void setRemark(string $Remark) Set Sensitivity labeling:
<li>NORMAL: Normal;</li>
<li>Sensitive: sensitive.</li>
 * @method string getUrl() Obtain Screenshot link
 * @method void setUrl(string $Url) Set Screenshot link
 */
class AiRecognitionTaskFaceResultItem extends AbstractModel
{
    /**
     * @var string Unique identification ID of the figure.
     */
    public $Id;

    /**
     * @var string Figure library type, indicates which figure library the recognized figure comes from.
<li>Default: default figure library;</li>
<li>UserDefine: user-defined character library.</li>
     */
    public $Type;

    /**
     * @var string Figure name.
     */
    public $Name;

    /**
     * @var array Result set of segments that contain people.
     */
    public $SegmentSet;

    /**
     * @var string Gender
<li>Male: man</li>
<li>Female: woman.</li>
     */
    public $Gender;

    /**
     * @var string Date of birth of a person.
     */
    public $Birthday;

    /**
     * @var string Occupation or position.
     */
    public $Profession;

    /**
     * @var string Graduation institution of the person.
     */
    public $SchoolOfGraduation;

    /**
     * @var string Figure description.
     */
    public $Abstract;

    /**
     * @var string Birthplace or place of origin of a person.
     */
    public $PlaceOfBirth;

    /**
     * @var string Person type:
<li>Politician: official.</li>
<li>Artist: artist.</li>
     */
    public $PersonType;

    /**
     * @var string Sensitivity labeling:
<li>NORMAL: Normal;</li>
<li>Sensitive: sensitive.</li>
     */
    public $Remark;

    /**
     * @var string Screenshot link
     */
    public $Url;

    /**
     * @param string $Id Unique identification ID of the figure.
     * @param string $Type Figure library type, indicates which figure library the recognized figure comes from.
<li>Default: default figure library;</li>
<li>UserDefine: user-defined character library.</li>
     * @param string $Name Figure name.
     * @param array $SegmentSet Result set of segments that contain people.
     * @param string $Gender Gender
<li>Male: man</li>
<li>Female: woman.</li>
     * @param string $Birthday Date of birth of a person.
     * @param string $Profession Occupation or position.
     * @param string $SchoolOfGraduation Graduation institution of the person.
     * @param string $Abstract Figure description.
     * @param string $PlaceOfBirth Birthplace or place of origin of a person.
     * @param string $PersonType Person type:
<li>Politician: official.</li>
<li>Artist: artist.</li>
     * @param string $Remark Sensitivity labeling:
<li>NORMAL: Normal;</li>
<li>Sensitive: sensitive.</li>
     * @param string $Url Screenshot link
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskFaceSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("SchoolOfGraduation",$param) and $param["SchoolOfGraduation"] !== null) {
            $this->SchoolOfGraduation = $param["SchoolOfGraduation"];
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }

        if (array_key_exists("PlaceOfBirth",$param) and $param["PlaceOfBirth"] !== null) {
            $this->PlaceOfBirth = $param["PlaceOfBirth"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
