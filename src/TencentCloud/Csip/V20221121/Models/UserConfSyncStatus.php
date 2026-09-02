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
 * User configuration synchronization status
 *
 * @method integer getAppID() Obtain <p>User AppID.</p>
 * @method void setAppID(integer $AppID) Set <p>User AppID.</p>
 * @method boolean getAllowSync() Obtain <p>Whether administrator synchronization is allowed</p>
 * @method void setAllowSync(boolean $AllowSync) Set <p>Whether administrator synchronization is allowed</p>
 * @method boolean getInConf() Obtain <p>Whether it is being configured</p>
 * @method void setInConf(boolean $InConf) Set <p>Whether it is being configured</p>
 * @method boolean getManagedByOther() Obtain <p>Whether synchronized by other administrators</p>
 * @method void setManagedByOther(boolean $ManagedByOther) Set <p>Whether synchronized by other administrators</p>
 */
class UserConfSyncStatus extends AbstractModel
{
    /**
     * @var integer <p>User AppID.</p>
     */
    public $AppID;

    /**
     * @var boolean <p>Whether administrator synchronization is allowed</p>
     */
    public $AllowSync;

    /**
     * @var boolean <p>Whether it is being configured</p>
     */
    public $InConf;

    /**
     * @var boolean <p>Whether synchronized by other administrators</p>
     */
    public $ManagedByOther;

    /**
     * @param integer $AppID <p>User AppID.</p>
     * @param boolean $AllowSync <p>Whether administrator synchronization is allowed</p>
     * @param boolean $InConf <p>Whether it is being configured</p>
     * @param boolean $ManagedByOther <p>Whether synchronized by other administrators</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("InConf",$param) and $param["InConf"] !== null) {
            $this->InConf = $param["InConf"];
        }

        if (array_key_exists("ManagedByOther",$param) and $param["ManagedByOther"] !== null) {
            $this->ManagedByOther = $param["ManagedByOther"];
        }
    }
}
