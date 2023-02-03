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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Most matching candidate recognized
 *
 * @method string getPersonId() Obtain Person ID
 * @method void setPersonId(string $PersonId) Set Person ID
 * @method string getFaceId() Obtain Face ID, which is valid only when returned by the `SearchFaces` or `SearchFacesReturnsByGroup` API. User search APIs use facial feature fusion to search for users, for which this field is meaningless.
 * @method void setFaceId(string $FaceId) Set Face ID, which is valid only when returned by the `SearchFaces` or `SearchFacesReturnsByGroup` API. User search APIs use facial feature fusion to search for users, for which this field is meaningless.
 * @method float getScore() Obtain Match score of candidate. 

In a face base library containing 10,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 70, 80, and 90, respectively;
In a face base library containing 100,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 80, 90, and 100, respectively;
In a face base library containing 300,000 faces, the 1% and 0.1% FARs correspond to scores of 85 and 95, respectively.

Generally, the score of 80 is suitable for most scenarios. We recommend choosing an appropriate score based on the actual situation, preferably no more than 90.
 * @method void setScore(float $Score) Set Match score of candidate. 

In a face base library containing 10,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 70, 80, and 90, respectively;
In a face base library containing 100,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 80, 90, and 100, respectively;
In a face base library containing 300,000 faces, the 1% and 0.1% FARs correspond to scores of 85 and 95, respectively.

Generally, the score of 80 is suitable for most scenarios. We recommend choosing an appropriate score based on the actual situation, preferably no more than 90.
 * @method string getPersonName() Obtain Person name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPersonName(string $PersonName) Set Person name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getGender() Obtain Person gender
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGender(integer $Gender) Set Person gender
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPersonGroupInfos() Obtain List of groups containing this person and their description fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPersonGroupInfos(array $PersonGroupInfos) Set List of groups containing this person and their description fields
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Candidate extends AbstractModel
{
    /**
     * @var string Person ID
     */
    public $PersonId;

    /**
     * @var string Face ID, which is valid only when returned by the `SearchFaces` or `SearchFacesReturnsByGroup` API. User search APIs use facial feature fusion to search for users, for which this field is meaningless.
     */
    public $FaceId;

    /**
     * @var float Match score of candidate. 

In a face base library containing 10,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 70, 80, and 90, respectively;
In a face base library containing 100,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 80, 90, and 100, respectively;
In a face base library containing 300,000 faces, the 1% and 0.1% FARs correspond to scores of 85 and 95, respectively.

Generally, the score of 80 is suitable for most scenarios. We recommend choosing an appropriate score based on the actual situation, preferably no more than 90.
     */
    public $Score;

    /**
     * @var string Person name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PersonName;

    /**
     * @var integer Person gender
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Gender;

    /**
     * @var array List of groups containing this person and their description fields
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PersonGroupInfos;

    /**
     * @param string $PersonId Person ID
     * @param string $FaceId Face ID, which is valid only when returned by the `SearchFaces` or `SearchFacesReturnsByGroup` API. User search APIs use facial feature fusion to search for users, for which this field is meaningless.
     * @param float $Score Match score of candidate. 

In a face base library containing 10,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 70, 80, and 90, respectively;
In a face base library containing 100,000 faces, the 1%, 0.1%, and 0.01% FARs correspond to scores of 80, 90, and 100, respectively;
In a face base library containing 300,000 faces, the 1% and 0.1% FARs correspond to scores of 85 and 95, respectively.

Generally, the score of 80 is suitable for most scenarios. We recommend choosing an appropriate score based on the actual situation, preferably no more than 90.
     * @param string $PersonName Person name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Gender Person gender
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PersonGroupInfos List of groups containing this person and their description fields
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonGroupInfos",$param) and $param["PersonGroupInfos"] !== null) {
            $this->PersonGroupInfos = [];
            foreach ($param["PersonGroupInfos"] as $key => $value){
                $obj = new PersonGroupInfo();
                $obj->deserialize($value);
                array_push($this->PersonGroupInfos, $obj);
            }
        }
    }
}
