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
 * GetDidDetail response structure.
 *
 * @method string getDid() Obtain The DID.
 * @method void setDid(string $Did) Set The DID.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getPublicKey() Obtain The public key.
 * @method void setPublicKey(string $PublicKey) Set The public key.
 * @method integer getAuthorityState() Obtain Whether the DID is a certified authority.
 * @method void setAuthorityState(integer $AuthorityState) Set Whether the DID is a certified authority.
 * @method integer getConsortiumId() Obtain The consortium ID.
 * @method void setConsortiumId(integer $ConsortiumId) Set The consortium ID.
 * @method string getConsortiumName() Obtain The consortium name.
 * @method void setConsortiumName(string $ConsortiumName) Set The consortium name.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getResChainId() Obtain The BCOS resource ID.
 * @method void setResChainId(string $ResChainId) Set The BCOS resource ID.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetDidDetailResponse extends AbstractModel
{
    /**
     * @var string The DID.
     */
    public $Did;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string The public key.
     */
    public $PublicKey;

    /**
     * @var integer Whether the DID is a certified authority.
     */
    public $AuthorityState;

    /**
     * @var integer The consortium ID.
     */
    public $ConsortiumId;

    /**
     * @var string The consortium name.
     */
    public $ConsortiumName;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The BCOS resource ID.
     */
    public $ResChainId;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Did The DID.
     * @param string $Remark Remarks
     * @param string $PublicKey The public key.
     * @param integer $AuthorityState Whether the DID is a certified authority.
     * @param integer $ConsortiumId The consortium ID.
     * @param string $ConsortiumName The consortium name.
     * @param integer $GroupId The group ID.
     * @param string $ClusterId The network ID.
     * @param string $ResChainId The BCOS resource ID.
     * @param string $CreateTime The creation time.
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AuthorityState",$param) and $param["AuthorityState"] !== null) {
            $this->AuthorityState = $param["AuthorityState"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ResChainId",$param) and $param["ResChainId"] !== null) {
            $this->ResChainId = $param["ResChainId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
