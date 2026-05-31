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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBClusterAccountDescription request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster id
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster id
 * @method string getAccountName() Obtain Account name.
 * @method void setAccountName(string $AccountName) Set Account name.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getHost() Obtain host name
 * @method void setHost(string $Host) Set host name
 */
class ModifyLibraDBClusterAccountDescriptionRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster id
     */
    public $ClusterId;

    /**
     * @var string Account name.
     */
    public $AccountName;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string host name
     */
    public $Host;

    /**
     * @param string $ClusterId Analysis Cluster id
     * @param string $AccountName Account name.
     * @param string $Description Description
     * @param string $Host host name
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
