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
 * Returned person information
 *
 * @method string getPersonName() Obtain Person name
 * @method void setPersonName(string $PersonName) Set Person name
 * @method string getPersonId() Obtain Person ID
 * @method void setPersonId(string $PersonId) Set Person ID
 * @method integer getGender() Obtain Person gender
 * @method void setGender(integer $Gender) Set Person gender
 * @method array getPersonExDescriptions() Obtain Content of person description field
 * @method void setPersonExDescriptions(array $PersonExDescriptions) Set Content of person description field
 * @method array getFaceIds() Obtain List of contained face images
 * @method void setFaceIds(array $FaceIds) Set List of contained face images
 * @method integer getCreationTimestamp() Obtain Person creation time, measured in the number of milliseconds elapsed since the Unix epoch 
The Unix epoch is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the Unix time document.
 * @method void setCreationTimestamp(integer $CreationTimestamp) Set Person creation time, measured in the number of milliseconds elapsed since the Unix epoch 
The Unix epoch is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the Unix time document.
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string Person name
     */
    public $PersonName;

    /**
     * @var string Person ID
     */
    public $PersonId;

    /**
     * @var integer Person gender
     */
    public $Gender;

    /**
     * @var array Content of person description field
     */
    public $PersonExDescriptions;

    /**
     * @var array List of contained face images
     */
    public $FaceIds;

    /**
     * @var integer Person creation time, measured in the number of milliseconds elapsed since the Unix epoch 
The Unix epoch is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the Unix time document.
     */
    public $CreationTimestamp;

    /**
     * @param string $PersonName Person name
     * @param string $PersonId Person ID
     * @param integer $Gender Person gender
     * @param array $PersonExDescriptions Content of person description field
     * @param array $FaceIds List of contained face images
     * @param integer $CreationTimestamp Person creation time, measured in the number of milliseconds elapsed since the Unix epoch 
The Unix epoch is 00:00:00, Thursday, January 1, 1970, Coordinated Universal Time (UTC). For more information, please see the Unix time document.
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
        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonExDescriptions",$param) and $param["PersonExDescriptions"] !== null) {
            $this->PersonExDescriptions = $param["PersonExDescriptions"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
