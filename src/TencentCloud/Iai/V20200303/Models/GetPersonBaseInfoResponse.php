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
 * GetPersonBaseInfo response structure.
 *
 * @method string getPersonName() Obtain Person name
 * @method void setPersonName(string $PersonName) Set Person name
 * @method integer getGender() Obtain Person gender. 0: empty; 1: male; 2: female.
 * @method void setGender(integer $Gender) Set Person gender. 0: empty; 1: male; 2: female.
 * @method array getFaceIds() Obtain List of the IDs of included faces
 * @method void setFaceIds(array $FaceIds) Set List of the IDs of included faces
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetPersonBaseInfoResponse extends AbstractModel
{
    /**
     * @var string Person name
     */
    public $PersonName;

    /**
     * @var integer Person gender. 0: empty; 1: male; 2: female.
     */
    public $Gender;

    /**
     * @var array List of the IDs of included faces
     */
    public $FaceIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PersonName Person name
     * @param integer $Gender Person gender. 0: empty; 1: male; 2: female.
     * @param array $FaceIds List of the IDs of included faces
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
