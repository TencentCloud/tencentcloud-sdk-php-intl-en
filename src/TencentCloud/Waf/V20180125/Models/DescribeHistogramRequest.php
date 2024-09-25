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
 * DescribeHistogram request structure.
 *
 * @method string getFromTime() Obtain Start time
 * @method void setFromTime(string $FromTime) Set Start time
 * @method string getToTime() Obtain End time
 * @method void setToTime(string $ToTime) Set End time
 * @method string getQueryField() Obtain Clustering fields. ip: IP aggregation; art: response time aggregation; url: URL aggregation; local: city aggregation after IP conversion; qps: second-level peak request count aggregation; up: peak upstream bandwidth aggregation; down: peak downstream bandwidth aggregation
 * @method void setQueryField(string $QueryField) Set Clustering fields. ip: IP aggregation; art: response time aggregation; url: URL aggregation; local: city aggregation after IP conversion; qps: second-level peak request count aggregation; up: peak upstream bandwidth aggregation; down: peak downstream bandwidth aggregation
 * @method string getSource() Obtain Condition, access for access logs, attack for attack logs
 * @method void setSource(string $Source) Set Condition, access for access logs, attack for attack logs
 * @method string getHost() Obtain Compatible host, gradually phasing out Host field
 * @method void setHost(string $Host) Set Compatible host, gradually phasing out Host field
 * @method string getEdition() Obtain Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method void setEdition(string $Edition) Set Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method string getInstanceID() Obtain WAF instance ID. No filter will be carried out if it is not input.
 * @method void setInstanceID(string $InstanceID) Set WAF instance ID. No filter will be carried out if it is not input.
 * @method string getDomain() Obtain Domain filtering, not applied if not input, used to replace Host field and phase out Host
 * @method void setDomain(string $Domain) Set Domain filtering, not applied if not input, used to replace Host field and phase out Host
 */
class DescribeHistogramRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $FromTime;

    /**
     * @var string End time
     */
    public $ToTime;

    /**
     * @var string Clustering fields. ip: IP aggregation; art: response time aggregation; url: URL aggregation; local: city aggregation after IP conversion; qps: second-level peak request count aggregation; up: peak upstream bandwidth aggregation; down: peak downstream bandwidth aggregation
     */
    public $QueryField;

    /**
     * @var string Condition, access for access logs, attack for attack logs
     */
    public $Source;

    /**
     * @var string Compatible host, gradually phasing out Host field
     */
    public $Host;

    /**
     * @var string Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     */
    public $Edition;

    /**
     * @var string WAF instance ID. No filter will be carried out if it is not input.
     */
    public $InstanceID;

    /**
     * @var string Domain filtering, not applied if not input, used to replace Host field and phase out Host
     */
    public $Domain;

    /**
     * @param string $FromTime Start time
     * @param string $ToTime End time
     * @param string $QueryField Clustering fields. ip: IP aggregation; art: response time aggregation; url: URL aggregation; local: city aggregation after IP conversion; qps: second-level peak request count aggregation; up: peak upstream bandwidth aggregation; down: peak downstream bandwidth aggregation
     * @param string $Source Condition, access for access logs, attack for attack logs
     * @param string $Host Compatible host, gradually phasing out Host field
     * @param string $Edition Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     * @param string $InstanceID WAF instance ID. No filter will be carried out if it is not input.
     * @param string $Domain Domain filtering, not applied if not input, used to replace Host field and phase out Host
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

        if (array_key_exists("QueryField",$param) and $param["QueryField"] !== null) {
            $this->QueryField = $param["QueryField"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
