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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyK8sApiAbnormalEventStatus request structure.
 *
 * @method array getEventIDSet() Obtain Event ID set
 * @method void setEventIDSet(array $EventIDSet) Set Event ID set
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class ModifyK8sApiAbnormalEventStatusRequest extends AbstractModel
{
    /**
     * @var array Event ID set
     */
    public $EventIDSet;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param array $EventIDSet Event ID set
     * @param string $Status Status
     * @param string $Remark Remarks
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
        if (array_key_exists("EventIDSet",$param) and $param["EventIDSet"] !== null) {
            $this->EventIDSet = $param["EventIDSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
