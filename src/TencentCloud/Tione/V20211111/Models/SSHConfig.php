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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notebook SSH port configuration.
 *
 * @method boolean getEnable() Obtain Whether to enable SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(boolean $Enable) Set Whether to enable SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicKey() Obtain Public key information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicKey(string $PublicKey) Set Public key information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoginCommand() Obtain Login command.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoginCommand(string $LoginCommand) Set Login command.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsAddressChanged() Obtain Whether to change the login address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAddressChanged(boolean $IsAddressChanged) Set Whether to change the login address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PodSSHInfo getPodSSHInfo() Obtain Pod access information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodSSHInfo(PodSSHInfo $PodSSHInfo) Set Pod access information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SSHConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var string Public key information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicKey;

    /**
     * @var integer Port number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Login command.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoginCommand;

    /**
     * @var boolean Whether to change the login address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAddressChanged;

    /**
     * @var PodSSHInfo Pod access information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodSSHInfo;

    /**
     * @param boolean $Enable Whether to enable SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicKey Public key information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Port number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoginCommand Login command.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsAddressChanged Whether to change the login address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PodSSHInfo $PodSSHInfo Pod access information.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LoginCommand",$param) and $param["LoginCommand"] !== null) {
            $this->LoginCommand = $param["LoginCommand"];
        }

        if (array_key_exists("IsAddressChanged",$param) and $param["IsAddressChanged"] !== null) {
            $this->IsAddressChanged = $param["IsAddressChanged"];
        }

        if (array_key_exists("PodSSHInfo",$param) and $param["PodSSHInfo"] !== null) {
            $this->PodSSHInfo = new PodSSHInfo();
            $this->PodSSHInfo->deserialize($param["PodSSHInfo"]);
        }
    }
}
