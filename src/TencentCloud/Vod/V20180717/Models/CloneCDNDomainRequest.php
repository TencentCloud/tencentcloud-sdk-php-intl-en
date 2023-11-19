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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneCDNDomain request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getReferenceDomain() Obtain The cloned domain.
 * @method void setReferenceDomain(string $ReferenceDomain) Set The cloned domain.
 * @method integer getSubAppId() Obtain VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
 * @method void setSubAppId(integer $SubAppId) Set VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
 */
class CloneCDNDomainRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string The cloned domain.
     */
    public $ReferenceDomain;

    /**
     * @var integer VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
     */
    public $SubAppId;

    /**
     * @param string $Domain Domain
     * @param string $ReferenceDomain The cloned domain.
     * @param integer $SubAppId VOD Application ID. If you want to access resources in a sub-app, fill in this field with the sub-app ID; otherwise, don't fill in this field.
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

        if (array_key_exists("ReferenceDomain",$param) and $param["ReferenceDomain"] !== null) {
            $this->ReferenceDomain = $param["ReferenceDomain"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
