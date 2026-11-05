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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource invocation time series details
 *
 * @method CallSource getCallSource() Obtain <p>Invocation source</p>
 * @method void setCallSource(CallSource $CallSource) Set <p>Invocation source</p>
 * @method string getDosageId() Obtain <p>Measurement ID, used for reconciliation/tracing</p>
 * @method void setDosageId(string $DosageId) Set <p>Measurement ID, used for reconciliation/tracing</p>
 * @method string getEventTime() Obtain <p>Call timestamp (Unix seconds).</p>
 * @method void setEventTime(string $EventTime) Set <p>Call timestamp (Unix seconds).</p>
 * @method ModelUsageDetail getModel() Obtain <p>Exclusive to MODEL domain</p>
 * @method void setModel(ModelUsageDetail $Model) Set <p>Exclusive to MODEL domain</p>
 * @method PluginUsageDetail getPlugin() Obtain <p>Exclusive to the PLUGIN domain</p>
 * @method void setPlugin(PluginUsageDetail $Plugin) Set <p>Exclusive to the PLUGIN domain</p>
 * @method string getTraceId() Obtain <p>Call chain tracing ID</p>
 * @method void setTraceId(string $TraceId) Set <p>Call chain tracing ID</p>
 * @method string getUserId() Obtain <p>User ID</p>
 * @method void setUserId(string $UserId) Set <p>User ID</p>
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var CallSource <p>Invocation source</p>
     */
    public $CallSource;

    /**
     * @var string <p>Measurement ID, used for reconciliation/tracing</p>
     */
    public $DosageId;

    /**
     * @var string <p>Call timestamp (Unix seconds).</p>
     */
    public $EventTime;

    /**
     * @var ModelUsageDetail <p>Exclusive to MODEL domain</p>
     */
    public $Model;

    /**
     * @var PluginUsageDetail <p>Exclusive to the PLUGIN domain</p>
     */
    public $Plugin;

    /**
     * @var string <p>Call chain tracing ID</p>
     */
    public $TraceId;

    /**
     * @var string <p>User ID</p>
     */
    public $UserId;

    /**
     * @param CallSource $CallSource <p>Invocation source</p>
     * @param string $DosageId <p>Measurement ID, used for reconciliation/tracing</p>
     * @param string $EventTime <p>Call timestamp (Unix seconds).</p>
     * @param ModelUsageDetail $Model <p>Exclusive to MODEL domain</p>
     * @param PluginUsageDetail $Plugin <p>Exclusive to the PLUGIN domain</p>
     * @param string $TraceId <p>Call chain tracing ID</p>
     * @param string $UserId <p>User ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = new CallSource();
            $this->CallSource->deserialize($param["CallSource"]);
        }

        if (array_key_exists("DosageId",$param) and $param["DosageId"] !== null) {
            $this->DosageId = $param["DosageId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelUsageDetail();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Plugin",$param) and $param["Plugin"] !== null) {
            $this->Plugin = new PluginUsageDetail();
            $this->Plugin->deserialize($param["Plugin"]);
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
