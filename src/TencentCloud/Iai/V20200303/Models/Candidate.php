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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The most similar candidate identified
 *
 * @method string getPersonId() Obtain Person ID.
 * @method void setPersonId(string $PersonId) Set Person ID.
 * @method string getFaceId() Obtain Face ID.
-Valid only in the API response of SearchFaces/SearchFacesReturnsByGroup.
-Person search class interfaces use the fusion feature method for retrieval. This field is meaningless.
 * @method void setFaceId(string $FaceId) Set Face ID.
-Valid only in the API response of SearchFaces/SearchFacesReturnsByGroup.
-Person search class interfaces use the fusion feature method for retrieval. This field is meaningless.
 * @method float getScore() Obtain Match score of the candidate. 
-In a face base library of 10,000 faces, a false acceptance rate of 1% corresponds to a score of 70 points, 0.1% corresponds to 80 points, and 0.01% corresponds to 90 points.
-For a face base library of 100,000, a false acceptance rate of 1% corresponds to a score of 80 points, 0.1% corresponds to 90 points, and 0.01% corresponds to 100 points.
-With a face base library of 300,000, a false acceptance rate of 1% corresponds to a score of 85, and a false acceptance rate of 0.1% corresponds to a score of 95.
-Generally, a score of around 80 applies to most scenarios. It is advisable not to exceed 90. You can choose a suitable score according to the actual situation.
 * @method void setScore(float $Score) Set Match score of the candidate. 
-In a face base library of 10,000 faces, a false acceptance rate of 1% corresponds to a score of 70 points, 0.1% corresponds to 80 points, and 0.01% corresponds to 90 points.
-For a face base library of 100,000, a false acceptance rate of 1% corresponds to a score of 80 points, 0.1% corresponds to 90 points, and 0.01% corresponds to 100 points.
-With a face base library of 300,000, a false acceptance rate of 1% corresponds to a score of 85, and a false acceptance rate of 0.1% corresponds to a score of 95.
-Generally, a score of around 80 applies to most scenarios. It is advisable not to exceed 90. You can choose a suitable score according to the actual situation.
 * @method string getPersonName() Obtain Person name.
 * @method void setPersonName(string $PersonName) Set Person name.
 * @method integer getGender() Obtain Gender of personnel.
 * @method void setGender(integer $Gender) Set Gender of personnel.
 * @method array getPersonGroupInfos() Obtain List of person libraries containing this person and the content of the description field.
 * @method void setPersonGroupInfos(array $PersonGroupInfos) Set List of person libraries containing this person and the content of the description field.
 */
class Candidate extends AbstractModel
{
    /**
     * @var string Person ID.
     */
    public $PersonId;

    /**
     * @var string Face ID.
-Valid only in the API response of SearchFaces/SearchFacesReturnsByGroup.
-Person search class interfaces use the fusion feature method for retrieval. This field is meaningless.
     */
    public $FaceId;

    /**
     * @var float Match score of the candidate. 
-In a face base library of 10,000 faces, a false acceptance rate of 1% corresponds to a score of 70 points, 0.1% corresponds to 80 points, and 0.01% corresponds to 90 points.
-For a face base library of 100,000, a false acceptance rate of 1% corresponds to a score of 80 points, 0.1% corresponds to 90 points, and 0.01% corresponds to 100 points.
-With a face base library of 300,000, a false acceptance rate of 1% corresponds to a score of 85, and a false acceptance rate of 0.1% corresponds to a score of 95.
-Generally, a score of around 80 applies to most scenarios. It is advisable not to exceed 90. You can choose a suitable score according to the actual situation.
     */
    public $Score;

    /**
     * @var string Person name.
     */
    public $PersonName;

    /**
     * @var integer Gender of personnel.
     */
    public $Gender;

    /**
     * @var array List of person libraries containing this person and the content of the description field.
     */
    public $PersonGroupInfos;

    /**
     * @param string $PersonId Person ID.
     * @param string $FaceId Face ID.
-Valid only in the API response of SearchFaces/SearchFacesReturnsByGroup.
-Person search class interfaces use the fusion feature method for retrieval. This field is meaningless.
     * @param float $Score Match score of the candidate. 
-In a face base library of 10,000 faces, a false acceptance rate of 1% corresponds to a score of 70 points, 0.1% corresponds to 80 points, and 0.01% corresponds to 90 points.
-For a face base library of 100,000, a false acceptance rate of 1% corresponds to a score of 80 points, 0.1% corresponds to 90 points, and 0.01% corresponds to 100 points.
-With a face base library of 300,000, a false acceptance rate of 1% corresponds to a score of 85, and a false acceptance rate of 0.1% corresponds to a score of 95.
-Generally, a score of around 80 applies to most scenarios. It is advisable not to exceed 90. You can choose a suitable score according to the actual situation.
     * @param string $PersonName Person name.
     * @param integer $Gender Gender of personnel.
     * @param array $PersonGroupInfos List of person libraries containing this person and the content of the description field.
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
