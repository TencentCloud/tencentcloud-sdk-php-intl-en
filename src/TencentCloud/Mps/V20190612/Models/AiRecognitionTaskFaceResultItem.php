<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getGender() Obtain The person’s gender.
<li>Male</li>
<li>Female</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGender(string $Gender) Set The person’s gender.
<li>Male</li>
<li>Female</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBirthday() Obtain The person’s birth date.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBirthday(string $Birthday) Set The person’s birth date.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProfession() Obtain The person’s job or job title.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProfession(string $Profession) Set The person’s job or job title.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchoolOfGraduation() Obtain The college the person graduated from.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchoolOfGraduation(string $SchoolOfGraduation) Set The college the person graduated from.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAbstract() Obtain The person’s profile.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAbstract(string $Abstract) Set The person’s profile.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPlaceOfBirth() Obtain The person’s place of birth.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPlaceOfBirth(string $PlaceOfBirth) Set The person’s place of birth.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPersonType() Obtain Whether the person is a politician or artist.
<li>Politician</li>
<li>Artist</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPersonType(string $PersonType) Set Whether the person is a politician or artist.
<li>Politician</li>
<li>Artist</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemark() Obtain Sensitivity
<li>Normal</li>
<li>Sensitive</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemark(string $Remark) Set Sensitivity
<li>Normal</li>
<li>Sensitive</li>
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUrl() Obtain The screenshot URL.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUrl(string $Url) Set The screenshot URL.
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @var string The person’s gender.
<li>Male</li>
<li>Female</li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Gender;

    /**
     * @var string The person’s birth date.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Birthday;

    /**
     * @var string The person’s job or job title.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Profession;

    /**
     * @var string The college the person graduated from.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchoolOfGraduation;

    /**
     * @var string The person’s profile.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Abstract;

    /**
     * @var string The person’s place of birth.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PlaceOfBirth;

    /**
     * @var string Whether the person is a politician or artist.
<li>Politician</li>
<li>Artist</li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PersonType;

    /**
     * @var string Sensitivity
<li>Normal</li>
<li>Sensitive</li>
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Remark;

    /**
     * @var string The screenshot URL.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Url;

    /**
     * @param string $Id Unique ID of a figure.
     * @param string $Type Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
     * @param string $Name Name of a figure.
     * @param array $SegmentSet Result set of segments that contain a figure.
     * @param string $Gender The person’s gender.
<li>Male</li>
<li>Female</li>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Birthday The person’s birth date.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Profession The person’s job or job title.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchoolOfGraduation The college the person graduated from.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Abstract The person’s profile.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PlaceOfBirth The person’s place of birth.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PersonType Whether the person is a politician or artist.
<li>Politician</li>
<li>Artist</li>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Remark Sensitivity
<li>Normal</li>
<li>Sensitive</li>
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Url The screenshot URL.
Note: This field may return null, indicating that no valid value can be obtained.
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
