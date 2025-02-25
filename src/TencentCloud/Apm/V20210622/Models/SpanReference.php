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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upstream and downstream relationships of span.
 *
 * @method string getRefType() Obtain Type of association relationship.
 * @method void setRefType(string $RefType) Set Type of association relationship.
 * @method string getSpanID() Obtain Span ID
 * @method void setSpanID(string $SpanID) Set Span ID
 * @method string getTraceID() Obtain Trace ID
 * @method void setTraceID(string $TraceID) Set Trace ID
 */
class SpanReference extends AbstractModel
{
    /**
     * @var string Type of association relationship.
     */
    public $RefType;

    /**
     * @var string Span ID
     */
    public $SpanID;

    /**
     * @var string Trace ID
     */
    public $TraceID;

    /**
     * @param string $RefType Type of association relationship.
     * @param string $SpanID Span ID
     * @param string $TraceID Trace ID
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
        if (array_key_exists("RefType",$param) and $param["RefType"] !== null) {
            $this->RefType = $param["RefType"];
        }

        if (array_key_exists("SpanID",$param) and $param["SpanID"] !== null) {
            $this->SpanID = $param["SpanID"];
        }

        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }
    }
}
