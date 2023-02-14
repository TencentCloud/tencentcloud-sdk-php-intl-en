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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterCpt request structure.
 *
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getCptJson() Obtain The JSON data of the credential claim type (CPT).
 * @method void setCptJson(string $CptJson) Set The JSON data of the credential claim type (CPT).
 * @method integer getCptId() Obtain If you do not specify this, the ID will auto increment.
 * @method void setCptId(integer $CptId) Set If you do not specify this, the ID will auto increment.
 */
class RegisterCptRequest extends AbstractModel
{
    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The JSON data of the credential claim type (CPT).
     */
    public $CptJson;

    /**
     * @var integer If you do not specify this, the ID will auto increment.
     */
    public $CptId;

    /**
     * @param integer $GroupId The group ID.
     * @param string $ClusterId The network ID.
     * @param string $CptJson The JSON data of the credential claim type (CPT).
     * @param integer $CptId If you do not specify this, the ID will auto increment.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CptJson",$param) and $param["CptJson"] !== null) {
            $this->CptJson = $param["CptJson"];
        }

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }
    }
}
