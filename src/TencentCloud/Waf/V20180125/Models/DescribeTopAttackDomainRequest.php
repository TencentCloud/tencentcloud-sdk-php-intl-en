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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopAttackDomain request structure.
 *
 * @method string getFromTime() Obtain Query start time
 * @method void setFromTime(string $FromTime) Set Query start time
 * @method string getToTime() Obtain Query end time
 * @method void setToTime(string $ToTime) Set Query end time
 * @method integer getCount() Obtain Top N, selectable from 0-10. The default is 10.
 * @method void setCount(integer $Count) Set Top N, selectable from 0-10. The default is 10.
 * @method string getEdition() Obtain Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method void setEdition(string $Edition) Set Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method string getInstanceID() Obtain WAF instance ID. No filter will be carried out if it is not input.
 * @method void setInstanceID(string $InstanceID) Set WAF instance ID. No filter will be carried out if it is not input.
 */
class DescribeTopAttackDomainRequest extends AbstractModel
{
    /**
     * @var string Query start time
     */
    public $FromTime;

    /**
     * @var string Query end time
     */
    public $ToTime;

    /**
     * @var integer Top N, selectable from 0-10. The default is 10.
     */
    public $Count;

    /**
     * @var string Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     */
    public $Edition;

    /**
     * @var string WAF instance ID. No filter will be carried out if it is not input.
     */
    public $InstanceID;

    /**
     * @param string $FromTime Query start time
     * @param string $ToTime Query end time
     * @param integer $Count Top N, selectable from 0-10. The default is 10.
     * @param string $Edition Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     * @param string $InstanceID WAF instance ID. No filter will be carried out if it is not input.
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
        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
