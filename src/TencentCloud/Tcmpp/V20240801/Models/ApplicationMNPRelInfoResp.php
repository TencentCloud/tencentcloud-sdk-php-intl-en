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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of bound applications
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIcon() Obtain Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPType() Obtain Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPType(string $MNPType) Set Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIntro() Obtain Introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIntro(string $MNPIntro) Set Introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPDesc() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPDesc(string $MNPDesc) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectStatus() Obtain Effectiveness. 1: Not effective 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectStatus(integer $EffectStatus) Set Effectiveness. 1: Not effective 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEffectMNPVersion() Obtain Effective version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set Effective version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPOnlineVersion() Obtain Online version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPOnlineVersion(string $MNPOnlineVersion) Set Online version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOnlineStatus() Obtain 0: Not released; 1: Released
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnlineStatus(integer $OnlineStatus) Set 0: Not released; 1: Released
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplicationMNPRelInfoResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPName;

    /**
     * @var string Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIcon;

    /**
     * @var string Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPType;

    /**
     * @var string Introduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIntro;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPDesc;

    /**
     * @var integer Effectiveness. 1: Not effective 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectStatus;

    /**
     * @var string Effective version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectMNPVersion;

    /**
     * @var string Online version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPOnlineVersion;

    /**
     * @var integer 0: Not released; 1: Released
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnlineStatus;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIcon Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPType Mini program type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIntro Introduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPDesc Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectStatus Effectiveness. 1: Not effective 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EffectMNPVersion Effective version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPOnlineVersion Online version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OnlineStatus 0: Not released; 1: Released
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("EffectMNPVersion",$param) and $param["EffectMNPVersion"] !== null) {
            $this->EffectMNPVersion = $param["EffectMNPVersion"];
        }

        if (array_key_exists("MNPOnlineVersion",$param) and $param["MNPOnlineVersion"] !== null) {
            $this->MNPOnlineVersion = $param["MNPOnlineVersion"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }
    }
}
