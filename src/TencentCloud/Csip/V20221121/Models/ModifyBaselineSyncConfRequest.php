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
 * ModifyBaselineSyncConf request structure.
 *
 * @method BaselineSyncConf getSyncConf() Obtain <p>Baseline synchronization configuration to be updated.</p>
 * @method void setSyncConf(BaselineSyncConf $SyncConf) Set <p>Baseline synchronization configuration to be updated.</p>
 * @method array getMemberId() Obtain List of member account Appids in the group account scenario. Leave it empty for non-group accounts or when querying only the current account.
 * @method void setMemberId(array $MemberId) Set List of member account Appids in the group account scenario. Leave it empty for non-group accounts or when querying only the current account.
 */
class ModifyBaselineSyncConfRequest extends AbstractModel
{
    /**
     * @var BaselineSyncConf <p>Baseline synchronization configuration to be updated.</p>
     */
    public $SyncConf;

    /**
     * @var array List of member account Appids in the group account scenario. Leave it empty for non-group accounts or when querying only the current account.
     */
    public $MemberId;

    /**
     * @param BaselineSyncConf $SyncConf <p>Baseline synchronization configuration to be updated.</p>
     * @param array $MemberId List of member account Appids in the group account scenario. Leave it empty for non-group accounts or when querying only the current account.
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
        if (array_key_exists("SyncConf",$param) and $param["SyncConf"] !== null) {
            $this->SyncConf = new BaselineSyncConf();
            $this->SyncConf->deserialize($param["SyncConf"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
