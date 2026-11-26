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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content identifier. The feature is open only in the allowlist.
 *
 * @method string getContentId() Obtain Content identifier ID.
 * @method void setContentId(string $ContentId) Set Content identifier ID.
 * @method string getDescription() Obtain Content identifier description.
 * @method void setDescription(string $Description) Set Content identifier description.
 * @method integer getReferenceCount() Obtain Number of times referenced by the rule engine.
 * @method void setReferenceCount(integer $ReferenceCount) Set Number of times referenced by the rule engine.
 * @method string getPlanId() Obtain Bound package ID.
 * @method void setPlanId(string $PlanId) Set Bound package ID.
 * @method array getTags() Obtain Bound tag.
 * @method void setTags(array $Tags) Set Bound tag.
 * @method string getStatus() Obtain Content identifier status. Valid values:
<li> active: effective; </li>
<li> deleted: Deleted.</li>
 * @method void setStatus(string $Status) Set Content identifier status. Valid values:
<li> active: effective; </li>
<li> deleted: Deleted.</li>
 * @method string getCreatedOn() Obtain Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getModifiedOn() Obtain Latest update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setModifiedOn(string $ModifiedOn) Set Latest update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getDeletedOn() Obtain Deletion time. It is empty when the status is not "deleted". The time is in Coordinated Universal Time (UTC), following the ISO 8601 date and time format.
 * @method void setDeletedOn(string $DeletedOn) Set Deletion time. It is empty when the status is not "deleted". The time is in Coordinated Universal Time (UTC), following the ISO 8601 date and time format.
 */
class ContentIdentifier extends AbstractModel
{
    /**
     * @var string Content identifier ID.
     */
    public $ContentId;

    /**
     * @var string Content identifier description.
     */
    public $Description;

    /**
     * @var integer Number of times referenced by the rule engine.
     */
    public $ReferenceCount;

    /**
     * @var string Bound package ID.
     */
    public $PlanId;

    /**
     * @var array Bound tag.
     */
    public $Tags;

    /**
     * @var string Content identifier status. Valid values:
<li> active: effective; </li>
<li> deleted: Deleted.</li>
     */
    public $Status;

    /**
     * @var string Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $CreatedOn;

    /**
     * @var string Latest update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $ModifiedOn;

    /**
     * @var string Deletion time. It is empty when the status is not "deleted". The time is in Coordinated Universal Time (UTC), following the ISO 8601 date and time format.
     */
    public $DeletedOn;

    /**
     * @param string $ContentId Content identifier ID.
     * @param string $Description Content identifier description.
     * @param integer $ReferenceCount Number of times referenced by the rule engine.
     * @param string $PlanId Bound package ID.
     * @param array $Tags Bound tag.
     * @param string $Status Content identifier status. Valid values:
<li> active: effective; </li>
<li> deleted: Deleted.</li>
     * @param string $CreatedOn Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $ModifiedOn Latest update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $DeletedOn Deletion time. It is empty when the status is not "deleted". The time is in Coordinated Universal Time (UTC), following the ISO 8601 date and time format.
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
        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceCount",$param) and $param["ReferenceCount"] !== null) {
            $this->ReferenceCount = $param["ReferenceCount"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("DeletedOn",$param) and $param["DeletedOn"] !== null) {
            $this->DeletedOn = $param["DeletedOn"];
        }
    }
}
