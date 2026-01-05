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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCdnDomain() Obtain Associated playback domain name.
 * @method void setCdnDomain(string $CdnDomain) Set Associated playback domain name.
 * @method string getRegion() Obtain Belonging region.
 * @method void setRegion(string $Region) Set Belonging region.
 * @method string getChannelId() Obtain Channel ID.
 * @method void setChannelId(string $ChannelId) Set Channel ID.
 * @method string getId() Obtain The ID of a record
 * @method void setId(string $Id) Set The ID of a record
 */
class DomainRecordInfo extends AbstractModel
{
    /**
     * @var string Associated playback domain name.
     */
    public $CdnDomain;

    /**
     * @var string Belonging region.
     */
    public $Region;

    /**
     * @var string Channel ID.
     */
    public $ChannelId;

    /**
     * @var string The ID of a record
     */
    public $Id;

    /**
     * @param string $CdnDomain Associated playback domain name.
     * @param string $Region Belonging region.
     * @param string $ChannelId Channel ID.
     * @param string $Id The ID of a record
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
        if (array_key_exists("CdnDomain",$param) and $param["CdnDomain"] !== null) {
            $this->CdnDomain = $param["CdnDomain"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
