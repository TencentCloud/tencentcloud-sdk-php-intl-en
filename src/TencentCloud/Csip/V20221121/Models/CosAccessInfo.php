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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos access permission information
 *
 * @method string getAccessUin() Obtain Access account uin
 * @method void setAccessUin(string $AccessUin) Set Access account uin
 * @method string getAccessUid() Obtain Accessible account uid
 * @method void setAccessUid(string $AccessUid) Set Accessible account uid
 * @method string getNickName() Obtain Nickname
 * @method void setNickName(string $NickName) Set Nickname
 * @method integer getIdentity() Obtain Identifier 
1 Root account
2 Sub-account
 * @method void setIdentity(integer $Identity) Set Identifier 
1 Root account
2 Sub-account
 * @method string getMainNickName() Obtain Root Account Name
 * @method void setMainNickName(string $MainNickName) Set Root Account Name
 * @method array getAkList() Obtain List of accessible AKs
 * @method void setAkList(array $AkList) Set List of accessible AKs
 * @method integer getCamPolicyCount() Obtain Number of accessible permissions
 * @method void setCamPolicyCount(integer $CamPolicyCount) Set Number of accessible permissions
 * @method integer getUpdateTime() Obtain Last modified Unix timestamp in milliseconds
 * @method void setUpdateTime(integer $UpdateTime) Set Last modified Unix timestamp in milliseconds
 */
class CosAccessInfo extends AbstractModel
{
    /**
     * @var string Access account uin
     */
    public $AccessUin;

    /**
     * @var string Accessible account uid
     */
    public $AccessUid;

    /**
     * @var string Nickname
     */
    public $NickName;

    /**
     * @var integer Identifier 
1 Root account
2 Sub-account
     */
    public $Identity;

    /**
     * @var string Root Account Name
     */
    public $MainNickName;

    /**
     * @var array List of accessible AKs
     */
    public $AkList;

    /**
     * @var integer Number of accessible permissions
     */
    public $CamPolicyCount;

    /**
     * @var integer Last modified Unix timestamp in milliseconds
     */
    public $UpdateTime;

    /**
     * @param string $AccessUin Access account uin
     * @param string $AccessUid Accessible account uid
     * @param string $NickName Nickname
     * @param integer $Identity Identifier 
1 Root account
2 Sub-account
     * @param string $MainNickName Root Account Name
     * @param array $AkList List of accessible AKs
     * @param integer $CamPolicyCount Number of accessible permissions
     * @param integer $UpdateTime Last modified Unix timestamp in milliseconds
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
        if (array_key_exists("AccessUin",$param) and $param["AccessUin"] !== null) {
            $this->AccessUin = $param["AccessUin"];
        }

        if (array_key_exists("AccessUid",$param) and $param["AccessUid"] !== null) {
            $this->AccessUid = $param["AccessUid"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Identity",$param) and $param["Identity"] !== null) {
            $this->Identity = $param["Identity"];
        }

        if (array_key_exists("MainNickName",$param) and $param["MainNickName"] !== null) {
            $this->MainNickName = $param["MainNickName"];
        }

        if (array_key_exists("AkList",$param) and $param["AkList"] !== null) {
            $this->AkList = $param["AkList"];
        }

        if (array_key_exists("CamPolicyCount",$param) and $param["CamPolicyCount"] !== null) {
            $this->CamPolicyCount = $param["CamPolicyCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
