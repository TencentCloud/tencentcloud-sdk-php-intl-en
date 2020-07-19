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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLivePlayAuthKey request structure.
 *
 * @method string getDomainName() Obtain Playback domain name.
 * @method void setDomainName(string $DomainName) Set Playback domain name.
 * @method integer getEnable() Obtain Whether to enable. 0: disabled; 1: enabled.
If this parameter is left empty, the current value will not be modified.
 * @method void setEnable(integer $Enable) Set Whether to enable. 0: disabled; 1: enabled.
If this parameter is left empty, the current value will not be modified.
 * @method string getAuthKey() Obtain Authentication key.
If this parameter is left empty, the current value will not be modified.
 * @method void setAuthKey(string $AuthKey) Set Authentication key.
If this parameter is left empty, the current value will not be modified.
 * @method integer getAuthDelta() Obtain Validity period in seconds.
If this parameter is left empty, the current value will not be modified.
 * @method void setAuthDelta(integer $AuthDelta) Set Validity period in seconds.
If this parameter is left empty, the current value will not be modified.
 * @method string getAuthBackKey() Obtain Backup authentication key.
If this parameter is left empty, the current value will not be modified.
 * @method void setAuthBackKey(string $AuthBackKey) Set Backup authentication key.
If this parameter is left empty, the current value will not be modified.
 */
class ModifyLivePlayAuthKeyRequest extends AbstractModel
{
    /**
     * @var string Playback domain name.
     */
    public $DomainName;

    /**
     * @var integer Whether to enable. 0: disabled; 1: enabled.
If this parameter is left empty, the current value will not be modified.
     */
    public $Enable;

    /**
     * @var string Authentication key.
If this parameter is left empty, the current value will not be modified.
     */
    public $AuthKey;

    /**
     * @var integer Validity period in seconds.
If this parameter is left empty, the current value will not be modified.
     */
    public $AuthDelta;

    /**
     * @var string Backup authentication key.
If this parameter is left empty, the current value will not be modified.
     */
    public $AuthBackKey;

    /**
     * @param string $DomainName Playback domain name.
     * @param integer $Enable Whether to enable. 0: disabled; 1: enabled.
If this parameter is left empty, the current value will not be modified.
     * @param string $AuthKey Authentication key.
If this parameter is left empty, the current value will not be modified.
     * @param integer $AuthDelta Validity period in seconds.
If this parameter is left empty, the current value will not be modified.
     * @param string $AuthBackKey Backup authentication key.
If this parameter is left empty, the current value will not be modified.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }

        if (array_key_exists("AuthDelta",$param) and $param["AuthDelta"] !== null) {
            $this->AuthDelta = $param["AuthDelta"];
        }

        if (array_key_exists("AuthBackKey",$param) and $param["AuthBackKey"] !== null) {
            $this->AuthBackKey = $param["AuthBackKey"];
        }
    }
}
