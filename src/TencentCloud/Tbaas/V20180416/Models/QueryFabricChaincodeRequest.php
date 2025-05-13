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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFabricChaincode request structure.
 *
 * @method string getClusterId() Obtain Cluster ID, which can be obtained from the blockchain cluster details.
 * @method void setClusterId(string $ClusterId) Set Cluster ID, which can be obtained from the blockchain cluster details.
 * @method string getChannelId() Obtain Channel ID, which can be obtained from the channel list or channel details.
 * @method void setChannelId(string $ChannelId) Set Channel ID, which can be obtained from the channel list or channel details.
 * @method string getChaincodeName() Obtain Contract name. it can be obtained from the contract list or contract details.
 * @method void setChaincodeName(string $ChaincodeName) Set Contract name. it can be obtained from the contract list or contract details.
 * @method string getFuncName() Obtain Contract method.
 * @method void setFuncName(string $FuncName) Set Contract method.
 * @method array getFuncParam() Obtain Contract method input parameter.
 * @method void setFuncParam(array $FuncParam) Set Contract method input parameter.
 */
class QueryFabricChaincodeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, which can be obtained from the blockchain cluster details.
     */
    public $ClusterId;

    /**
     * @var string Channel ID, which can be obtained from the channel list or channel details.
     */
    public $ChannelId;

    /**
     * @var string Contract name. it can be obtained from the contract list or contract details.
     */
    public $ChaincodeName;

    /**
     * @var string Contract method.
     */
    public $FuncName;

    /**
     * @var array Contract method input parameter.
     */
    public $FuncParam;

    /**
     * @param string $ClusterId Cluster ID, which can be obtained from the blockchain cluster details.
     * @param string $ChannelId Channel ID, which can be obtained from the channel list or channel details.
     * @param string $ChaincodeName Contract name. it can be obtained from the contract list or contract details.
     * @param string $FuncName Contract method.
     * @param array $FuncParam Contract method input parameter.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("FuncParam",$param) and $param["FuncParam"] !== null) {
            $this->FuncParam = $param["FuncParam"];
        }
    }
}
