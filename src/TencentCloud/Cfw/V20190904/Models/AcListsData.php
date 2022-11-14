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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access control list rule
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getSourceIp() Obtain Access source
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSourceIp(string $SourceIp) Set Access source
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getTargetIp() Obtain Access destination
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTargetIp(string $TargetIp) Set Access destination
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getProtocol() Obtain Protocol
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setProtocol(string $Protocol) Set Protocol
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPort() Obtain Port
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPort(string $Port) Set Port
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStrategy() Obtain Policy
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStrategy(integer $Strategy) Set Policy
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getDetail() Obtain Description
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDetail(string $Detail) Set Description
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getCount() Obtain Hit count
 * @method void setCount(integer $Count) Set Hit count
 * @method integer getOrderIndex() Obtain Priority
 * @method void setOrderIndex(integer $OrderIndex) Set Priority
 * @method string getLogId() Obtain Alert rule ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setLogId(string $LogId) Set Alert rule ID
Note: This field may return `null`, indicating that no valid value was found.
 */
class AcListsData extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Access source
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SourceIp;

    /**
     * @var string Access destination
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TargetIp;

    /**
     * @var string Protocol
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Protocol;

    /**
     * @var string Port
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Port;

    /**
     * @var integer Policy
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Strategy;

    /**
     * @var string Description
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Detail;

    /**
     * @var integer Hit count
     */
    public $Count;

    /**
     * @var integer Priority
     */
    public $OrderIndex;

    /**
     * @var string Alert rule ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $LogId;

    /**
     * @param integer $Id Rule ID
     * @param string $SourceIp Access source
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $TargetIp Access destination
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Protocol Protocol
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Port Port
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Strategy Policy
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Detail Description
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Count Hit count
     * @param integer $OrderIndex Priority
     * @param string $LogId Alert rule ID
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }
    }
}
