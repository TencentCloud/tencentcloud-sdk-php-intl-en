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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetConfigurationItems request structure.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getChronologicalOrder() Obtain Chronological order. Valid values: Reverse, Forward (default).
 * @method void setChronologicalOrder(string $ChronologicalOrder) Set Chronological order. Valid values: Reverse, Forward (default).
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method boolean getDiffMode() Obtain Whether to enable `DiffMode`. Valid values: true, false (default).
 * @method void setDiffMode(boolean $DiffMode) Set Whether to enable `DiffMode`. Valid values: true, false (default).
 * @method integer getLimit() Obtain Returned number. default: 10, maximum: 100.
 * @method void setLimit(integer $Limit) Set Returned number. default: 10, maximum: 100.
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 */
class GetConfigurationItemsRequest extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Chronological order. Valid values: Reverse, Forward (default).
     */
    public $ChronologicalOrder;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var boolean Whether to enable `DiffMode`. Valid values: true, false (default).
     */
    public $DiffMode;

    /**
     * @var integer Returned number. default: 10, maximum: 100.
     */
    public $Limit;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @param string $ResourceId Resource ID
     * @param string $ChronologicalOrder Chronological order. Valid values: Reverse, Forward (default).
     * @param string $StartTime Start time
     * @param integer $Offset Offset. Default value: 0.
     * @param boolean $DiffMode Whether to enable `DiffMode`. Valid values: true, false (default).
     * @param integer $Limit Returned number. default: 10, maximum: 100.
     * @param string $EndTime End time
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ChronologicalOrder",$param) and $param["ChronologicalOrder"] !== null) {
            $this->ChronologicalOrder = $param["ChronologicalOrder"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DiffMode",$param) and $param["DiffMode"] !== null) {
            $this->DiffMode = $param["DiffMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
