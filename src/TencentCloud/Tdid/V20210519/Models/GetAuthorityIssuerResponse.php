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
 * GetAuthorityIssuer response structure.
 *
 * @method string getName() Obtain The authority name.
 * @method void setName(string $Name) Set The authority name.
 * @method string getClusterId() Obtain The blockchain network ID.
 * @method void setClusterId(string $ClusterId) Set The blockchain network ID.
 * @method integer getGroupId() Obtain The blockchain group ID.
 * @method void setGroupId(integer $GroupId) Set The blockchain group ID.
 * @method string getDid() Obtain The DID of the authority.
 * @method void setDid(string $Did) Set The DID of the authority.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getRegisterTime() Obtain The registration time.
 * @method void setRegisterTime(string $RegisterTime) Set The registration time.
 * @method string getRecognizeTime() Obtain The recognition time.
 * @method void setRecognizeTime(string $RecognizeTime) Set The recognition time.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetAuthorityIssuerResponse extends AbstractModel
{
    /**
     * @var string The authority name.
     */
    public $Name;

    /**
     * @var string The blockchain network ID.
     */
    public $ClusterId;

    /**
     * @var integer The blockchain group ID.
     */
    public $GroupId;

    /**
     * @var string The DID of the authority.
     */
    public $Did;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string The registration time.
     */
    public $RegisterTime;

    /**
     * @var string The recognition time.
     */
    public $RecognizeTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name The authority name.
     * @param string $ClusterId The blockchain network ID.
     * @param integer $GroupId The blockchain group ID.
     * @param string $Did The DID of the authority.
     * @param string $Remark Remarks.
     * @param string $RegisterTime The registration time.
     * @param string $RecognizeTime The recognition time.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("RecognizeTime",$param) and $param["RecognizeTime"] !== null) {
            $this->RecognizeTime = $param["RecognizeTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
