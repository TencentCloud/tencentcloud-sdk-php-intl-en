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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostLimit request structure.
 *
 * @method string getDomain() Obtain Added domain
 * @method void setDomain(string $Domain) Set Added domain
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getAlbType() Obtain Traffic source
 * @method void setAlbType(string $AlbType) Set Traffic source
 */
class DescribeHostLimitRequest extends AbstractModel
{
    /**
     * @var string Added domain
     */
    public $Domain;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Traffic source
     */
    public $AlbType;

    /**
     * @param string $Domain Added domain
     * @param string $InstanceID Instance ID
     * @param string $AlbType Traffic source
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }
    }
}
