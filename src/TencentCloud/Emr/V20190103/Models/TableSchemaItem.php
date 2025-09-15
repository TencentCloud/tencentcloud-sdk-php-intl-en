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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table schema information
 *
 * @method string getName() Obtain Column identifier
 * @method void setName(string $Name) Set Column identifier
 * @method boolean getSortable() Obtain Whether it is sortable by this column
 * @method void setSortable(boolean $Sortable) Set Whether it is sortable by this column
 * @method boolean getWithFilter() Obtain Whether it is filterable
 * @method void setWithFilter(boolean $WithFilter) Set Whether it is filterable
 * @method array getCandidates() Obtain Filtered candidate set

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCandidates(array $Candidates) Set Filtered candidate set

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getClickable() Obtain Whether it is clickable.
 * @method void setClickable(boolean $Clickable) Set Whether it is clickable.
 * @method string getTitle() Obtain Display name.
 * @method void setTitle(string $Title) Set Display name.
 */
class TableSchemaItem extends AbstractModel
{
    /**
     * @var string Column identifier
     */
    public $Name;

    /**
     * @var boolean Whether it is sortable by this column
     */
    public $Sortable;

    /**
     * @var boolean Whether it is filterable
     */
    public $WithFilter;

    /**
     * @var array Filtered candidate set

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Candidates;

    /**
     * @var boolean Whether it is clickable.
     */
    public $Clickable;

    /**
     * @var string Display name.
     */
    public $Title;

    /**
     * @param string $Name Column identifier
     * @param boolean $Sortable Whether it is sortable by this column
     * @param boolean $WithFilter Whether it is filterable
     * @param array $Candidates Filtered candidate set

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Clickable Whether it is clickable.
     * @param string $Title Display name.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sortable",$param) and $param["Sortable"] !== null) {
            $this->Sortable = $param["Sortable"];
        }

        if (array_key_exists("WithFilter",$param) and $param["WithFilter"] !== null) {
            $this->WithFilter = $param["WithFilter"];
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = $param["Candidates"];
        }

        if (array_key_exists("Clickable",$param) and $param["Clickable"] !== null) {
            $this->Clickable = $param["Clickable"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
