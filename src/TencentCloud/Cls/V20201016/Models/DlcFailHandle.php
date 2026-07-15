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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dlc delivery failure handling message
 *
 * @method boolean getStoreToDlc() Obtain <p>Whether to store in DLC</p><p>Default value: false</p><p>Controls whether to enable storing delivery failure logs in DLC tables</p>
 * @method void setStoreToDlc(boolean $StoreToDlc) Set <p>Whether to store in DLC</p><p>Default value: false</p><p>Controls whether to enable storing delivery failure logs in DLC tables</p>
 * @method DlcFailTableInfo getDlcFailTableInfo() Obtain <p>DLC table information</p>
 * @method void setDlcFailTableInfo(DlcFailTableInfo $DlcFailTableInfo) Set <p>DLC table information</p>
 */
class DlcFailHandle extends AbstractModel
{
    /**
     * @var boolean <p>Whether to store in DLC</p><p>Default value: false</p><p>Controls whether to enable storing delivery failure logs in DLC tables</p>
     */
    public $StoreToDlc;

    /**
     * @var DlcFailTableInfo <p>DLC table information</p>
     */
    public $DlcFailTableInfo;

    /**
     * @param boolean $StoreToDlc <p>Whether to store in DLC</p><p>Default value: false</p><p>Controls whether to enable storing delivery failure logs in DLC tables</p>
     * @param DlcFailTableInfo $DlcFailTableInfo <p>DLC table information</p>
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
        if (array_key_exists("StoreToDlc",$param) and $param["StoreToDlc"] !== null) {
            $this->StoreToDlc = $param["StoreToDlc"];
        }

        if (array_key_exists("DlcFailTableInfo",$param) and $param["DlcFailTableInfo"] !== null) {
            $this->DlcFailTableInfo = new DlcFailTableInfo();
            $this->DlcFailTableInfo->deserialize($param["DlcFailTableInfo"]);
        }
    }
}
