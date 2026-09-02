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
 * CreateImageVulListExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain <p>Filter item</p>
 * @method void setFilter(Filter $Filter) Set <p>Filter item</p>
 * @method integer getSave() Obtain <p>Save to the export task</p><p>Enumeration value:</p><ul><li>0: Do not save</li><li>1: Save</li></ul>
 * @method void setSave(integer $Save) Set <p>Save to the export task</p><p>Enumeration value:</p><ul><li>0: Do not save</li><li>1: Save</li></ul>
 * @method string getExportName() Obtain <p>Export file name</p>
 * @method void setExportName(string $ExportName) Set <p>Export file name</p>
 */
class CreateImageVulListExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>Filter item</p>
     */
    public $Filter;

    /**
     * @var integer <p>Save to the export task</p><p>Enumeration value:</p><ul><li>0: Do not save</li><li>1: Save</li></ul>
     */
    public $Save;

    /**
     * @var string <p>Export file name</p>
     */
    public $ExportName;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter <p>Filter item</p>
     * @param integer $Save <p>Save to the export task</p><p>Enumeration value:</p><ul><li>0: Do not save</li><li>1: Save</li></ul>
     * @param string $ExportName <p>Export file name</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Save",$param) and $param["Save"] !== null) {
            $this->Save = $param["Save"];
        }

        if (array_key_exists("ExportName",$param) and $param["ExportName"] !== null) {
            $this->ExportName = $param["ExportName"];
        }
    }
}
