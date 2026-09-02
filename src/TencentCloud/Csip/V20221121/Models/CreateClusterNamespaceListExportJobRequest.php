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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterNamespaceListExportJob request structure.
 *
 * @method string getClusterCaMD5() Obtain <p>Cluster CA certificate MD5</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster CA certificate MD5</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain <p>Common filter criteria list. Supported filter fields:<br>Name: namespace name, fuzzy matching.<br>Label: tag, fuzzy matching (match the key or value of the tag. A match is made if either is hit).</p>
 * @method void setFilter(Filter $Filter) Set <p>Common filter criteria list. Supported filter fields:<br>Name: namespace name, fuzzy matching.<br>Label: tag, fuzzy matching (match the key or value of the tag. A match is made if either is hit).</p>
 * @method array getExportFields() Obtain <p>Export field list (if not specified, all fields will be exported)<br>Enumeration values:<br>Name: namespace name<br>Labels: tags (format: key1=value1;key2=value2)<br>CreateTime: creation time</p>
 * @method void setExportFields(array $ExportFields) Set <p>Export field list (if not specified, all fields will be exported)<br>Enumeration values:<br>Name: namespace name<br>Labels: tags (format: key1=value1;key2=value2)<br>CreateTime: creation time</p>
 */
class CreateClusterNamespaceListExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster CA certificate MD5</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>Common filter criteria list. Supported filter fields:<br>Name: namespace name, fuzzy matching.<br>Label: tag, fuzzy matching (match the key or value of the tag. A match is made if either is hit).</p>
     */
    public $Filter;

    /**
     * @var array <p>Export field list (if not specified, all fields will be exported)<br>Enumeration values:<br>Name: namespace name<br>Labels: tags (format: key1=value1;key2=value2)<br>CreateTime: creation time</p>
     */
    public $ExportFields;

    /**
     * @param string $ClusterCaMD5 <p>Cluster CA certificate MD5</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter <p>Common filter criteria list. Supported filter fields:<br>Name: namespace name, fuzzy matching.<br>Label: tag, fuzzy matching (match the key or value of the tag. A match is made if either is hit).</p>
     * @param array $ExportFields <p>Export field list (if not specified, all fields will be exported)<br>Enumeration values:<br>Name: namespace name<br>Labels: tags (format: key1=value1;key2=value2)<br>CreateTime: creation time</p>
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
        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ExportFields",$param) and $param["ExportFields"] !== null) {
            $this->ExportFields = $param["ExportFields"];
        }
    }
}
