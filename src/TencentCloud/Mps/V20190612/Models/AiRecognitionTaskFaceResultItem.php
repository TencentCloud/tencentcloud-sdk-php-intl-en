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
 * Face recognition result
 *
 * @method string getId() Obtain Unique ID of a figure.
 * @method void setId(string $Id) Set Unique ID of a figure.
 * @method string getType() Obtain Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
 * @method void setType(string $Type) Set Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
 * @method string getName() Obtain Name of a figure.
 * @method void setName(string $Name) Set Name of a figure.
 * @method array getSegmentSet() Obtain Result set of segments that contain a figure.
 * @method void setSegmentSet(array $SegmentSet) Set Result set of segments that contain a figure.
 * @method string getGender() Obtain Gender of the person.
<Li>Male: man.</li>.
<Li>Female: specifies the woman.</li>.
 * @method void setGender(string $Gender) Set Gender of the person.
<Li>Male: man.</li>.
<Li>Female: specifies the woman.</li>.
 * @method string getBirthday() Obtain Date of birth.
 * @method void setBirthday(string $Birthday) Set Date of birth.
 * @method string getProfession() Obtain Occupation or position of a person.
 * @method void setProfession(string $Profession) Set Occupation or position of a person.
 * @method string getSchoolOfGraduation() Obtain Specifies the graduation institution of the person.
 * @method void setSchoolOfGraduation(string $SchoolOfGraduation) Set Specifies the graduation institution of the person.
 * @method string getAbstract() Obtain Description of the person.
 * @method void setAbstract(string $Abstract) Set Description of the person.
 * @method string getPlaceOfBirth() Obtain Specifies the birthplace or place of origin.
 * @method void setPlaceOfBirth(string $PlaceOfBirth) Set Specifies the birthplace or place of origin.
 * @method string getPersonType() Obtain Person type.
<Li>Politician: specifies the official.</li>.
<Li>Artist: specifies the artist.</li>.
 * @method void setPersonType(string $PersonType) Set Person type.
<Li>Politician: specifies the official.</li>.
<Li>Artist: specifies the artist.</li>.
 * @method string getRemark() Obtain Sensitivity labeling.
<Li>Normal: specifies the scaling group is normal.</li>.
<Li>Sensitive: specifies sensitivity.</li>.
 * @method void setRemark(string $Remark) Set Sensitivity labeling.
<Li>Normal: specifies the scaling group is normal.</li>.
<Li>Sensitive: specifies sensitivity.</li>.
 * @method string getUrl() Obtain Specifies the screenshot link.
 * @method void setUrl(string $Url) Set Specifies the screenshot link.
 */
class AiRecognitionTaskFaceResultItem extends AbstractModel
{
    /**
     * @var string Unique ID of a figure.
     */
    public $Id;

    /**
     * @var string Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
     */
    public $Type;

    /**
     * @var string Name of a figure.
     */
    public $Name;

    /**
     * @var array Result set of segments that contain a figure.
     */
    public $SegmentSet;

    /**
     * @var string Gender of the person.
<Li>Male: man.</li>.
<Li>Female: specifies the woman.</li>.
     */
    public $Gender;

    /**
     * @var string Date of birth.
     */
    public $Birthday;

    /**
     * @var string Occupation or position of a person.
     */
    public $Profession;

    /**
     * @var string Specifies the graduation institution of the person.
     */
    public $SchoolOfGraduation;

    /**
     * @var string Description of the person.
     */
    public $Abstract;

    /**
     * @var string Specifies the birthplace or place of origin.
     */
    public $PlaceOfBirth;

    /**
     * @var string Person type.
<Li>Politician: specifies the official.</li>.
<Li>Artist: specifies the artist.</li>.
     */
    public $PersonType;

    /**
     * @var string Sensitivity labeling.
<Li>Normal: specifies the scaling group is normal.</li>.
<Li>Sensitive: specifies sensitivity.</li>.
     */
    public $Remark;

    /**
     * @var string Specifies the screenshot link.
     */
    public $Url;

    /**
     * @param string $Id Unique ID of a figure.
     * @param string $Type Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
     * @param string $Name Name of a figure.
     * @param array $SegmentSet Result set of segments that contain a figure.
     * @param string $Gender Gender of the person.
<Li>Male: man.</li>.
<Li>Female: specifies the woman.</li>.
     * @param string $Birthday Date of birth.
     * @param string $Profession Occupation or position of a person.
     * @param string $SchoolOfGraduation Specifies the graduation institution of the person.
     * @param string $Abstract Description of the person.
     * @param string $PlaceOfBirth Specifies the birthplace or place of origin.
     * @param string $PersonType Person type.
<Li>Politician: specifies the official.</li>.
<Li>Artist: specifies the artist.</li>.
     * @param string $Remark Sensitivity labeling.
<Li>Normal: specifies the scaling group is normal.</li>.
<Li>Sensitive: specifies sensitivity.</li>.
     * @param string $Url Specifies the screenshot link.
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
