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
 * The details of the DID.
 *
 * @method string getAccountIdentifier() Obtain The account identifier.
 * @method void setAccountIdentifier(string $AccountIdentifier) Set The account identifier.
 * @method string getChainID() Obtain The chain ID.
 * @method void setChainID(string $ChainID) Set The chain ID.
 * @method string getDid() Obtain The DID.
 * @method void setDid(string $Did) Set The DID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getGroupName() Obtain The group name.
 * @method void setGroupName(string $GroupName) Set The group name.
 */
class Identity extends AbstractModel
{
    /**
     * @var string The account identifier.
     */
    public $AccountIdentifier;

    /**
     * @var string The chain ID.
     */
    public $ChainID;

    /**
     * @var string The DID.
     */
    public $Did;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The group name.
     */
    public $GroupName;

    /**
     * @param string $AccountIdentifier The account identifier.
     * @param string $ChainID The chain ID.
     * @param string $Did The DID.
     * @param integer $GroupId The group ID.
     * @param string $GroupName The group name.
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
        if (array_key_exists("AccountIdentifier",$param) and $param["AccountIdentifier"] !== null) {
            $this->AccountIdentifier = $param["AccountIdentifier"];
        }

        if (array_key_exists("ChainID",$param) and $param["ChainID"] !== null) {
            $this->ChainID = $param["ChainID"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
