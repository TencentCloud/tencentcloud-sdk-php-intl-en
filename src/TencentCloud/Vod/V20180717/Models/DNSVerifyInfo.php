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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNS verification information
 *
 * @method string getSubDomain() Obtain sub-parsing.
 * @method void setSubDomain(string $SubDomain) Set sub-parsing.
 * @method string getRecord() Obtain parse value.
 * @method void setRecord(string $Record) Set parse value.
 * @method string getRecordType() Obtain parsing type.
 * @method void setRecordType(string $RecordType) Set parsing type.
 */
class DNSVerifyInfo extends AbstractModel
{
    /**
     * @var string sub-parsing.
     */
    public $SubDomain;

    /**
     * @var string parse value.
     */
    public $Record;

    /**
     * @var string parsing type.
     */
    public $RecordType;

    /**
     * @param string $SubDomain sub-parsing.
     * @param string $Record parse value.
     * @param string $RecordType parsing type.
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
        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }
    }
}
