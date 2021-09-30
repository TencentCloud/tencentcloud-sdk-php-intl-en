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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instances associated with the CCN instance.
 *
 * @method string getCcnId() Obtain CCN instance ID.
 * @method void setCcnId(string $CcnId) Set CCN instance ID.
 * @method array getCidrBlock() Obtain CIDR block of associated instance.
 * @method void setCidrBlock(array $CidrBlock) Set CIDR block of associated instance.
 * @method string getState() Obtain Associated instance status:

•  PENDING: applying
•  ACTIVE: connected
•  EXPIRED: expired
•  REJECTED: rejected
•  DELETED: deleted
•  FAILED: failed (it will be asynchronously unassociated after 2 hours)
•  ATTACHING: associating
•  DETACHING: unassociating
•  DETACHFAILED: failed to unassociate (it will be asynchronously unassociated after 2 hours)
 * @method void setState(string $State) Set Associated instance status:

•  PENDING: applying
•  ACTIVE: connected
•  EXPIRED: expired
•  REJECTED: rejected
•  DELETED: deleted
•  FAILED: failed (it will be asynchronously unassociated after 2 hours)
•  ATTACHING: associating
•  DETACHING: unassociating
•  DETACHFAILED: failed to unassociate (it will be asynchronously unassociated after 2 hours)
 * @method string getAttachedTime() Obtain Association time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttachedTime(string $AttachedTime) Set Association time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 */
class CcnAttachedInstance extends AbstractModel
{
    /**
     * @var string CCN instance ID.
     */
    public $CcnId;

    /**
     * @var array CIDR block of associated instance.
     */
    public $CidrBlock;

    /**
     * @var string Associated instance status:

•  PENDING: applying
•  ACTIVE: connected
•  EXPIRED: expired
•  REJECTED: rejected
•  DELETED: deleted
•  FAILED: failed (it will be asynchronously unassociated after 2 hours)
•  ATTACHING: associating
•  DETACHING: unassociating
•  DETACHFAILED: failed to unassociate (it will be asynchronously unassociated after 2 hours)
     */
    public $State;

    /**
     * @var string Association time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttachedTime;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @param string $CcnId CCN instance ID.
     * @param array $CidrBlock CIDR block of associated instance.
     * @param string $State Associated instance status:

•  PENDING: applying
•  ACTIVE: connected
•  EXPIRED: expired
•  REJECTED: rejected
•  DELETED: deleted
•  FAILED: failed (it will be asynchronously unassociated after 2 hours)
•  ATTACHING: associating
•  DETACHING: unassociating
•  DETACHFAILED: failed to unassociate (it will be asynchronously unassociated after 2 hours)
     * @param string $AttachedTime Association time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Remarks
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
