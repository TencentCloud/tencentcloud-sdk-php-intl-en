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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProject request structure.
 *
 * @method string getProjectId() Obtain Project ID. It is common to use the Project ID for queries, and either this or projectName must be present.
 * @method void setProjectId(string $ProjectId) Set Project ID. It is common to use the Project ID for queries, and either this or projectName must be present.
 * @method boolean getDescribeClusters() Obtain Whether to Display Associated Cluster Information
 * @method void setDescribeClusters(boolean $DescribeClusters) Set Whether to Display Associated Cluster Information
 * @method boolean getDescribeExecutors() Obtain Whether to Display Information of Associated Execution Group, only partial information.
 * @method void setDescribeExecutors(boolean $DescribeExecutors) Set Whether to Display Information of Associated Execution Group, only partial information.
 * @method boolean getDescribeAdminUsers() Obtain Default not to display project administrator information
 * @method void setDescribeAdminUsers(boolean $DescribeAdminUsers) Set Default not to display project administrator information
 * @method boolean getDescribeMemberCount() Obtain Default not to count the number of project personnel
 * @method void setDescribeMemberCount(boolean $DescribeMemberCount) Set Default not to count the number of project personnel
 * @method boolean getDescribeCreator() Obtain Default not to query creator's information
 * @method void setDescribeCreator(boolean $DescribeCreator) Set Default not to query creator's information
 * @method string getProjectName() Obtain The project name is unique within a tenant, generally used for conversion to Project ID.
 * @method void setProjectName(string $ProjectName) Set The project name is unique within a tenant, generally used for conversion to Project ID.
 */
class DescribeProjectRequest extends AbstractModel
{
    /**
     * @var string Project ID. It is common to use the Project ID for queries, and either this or projectName must be present.
     */
    public $ProjectId;

    /**
     * @var boolean Whether to Display Associated Cluster Information
     */
    public $DescribeClusters;

    /**
     * @var boolean Whether to Display Information of Associated Execution Group, only partial information.
     */
    public $DescribeExecutors;

    /**
     * @var boolean Default not to display project administrator information
     */
    public $DescribeAdminUsers;

    /**
     * @var boolean Default not to count the number of project personnel
     */
    public $DescribeMemberCount;

    /**
     * @var boolean Default not to query creator's information
     */
    public $DescribeCreator;

    /**
     * @var string The project name is unique within a tenant, generally used for conversion to Project ID.
     */
    public $ProjectName;

    /**
     * @param string $ProjectId Project ID. It is common to use the Project ID for queries, and either this or projectName must be present.
     * @param boolean $DescribeClusters Whether to Display Associated Cluster Information
     * @param boolean $DescribeExecutors Whether to Display Information of Associated Execution Group, only partial information.
     * @param boolean $DescribeAdminUsers Default not to display project administrator information
     * @param boolean $DescribeMemberCount Default not to count the number of project personnel
     * @param boolean $DescribeCreator Default not to query creator's information
     * @param string $ProjectName The project name is unique within a tenant, generally used for conversion to Project ID.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DescribeClusters",$param) and $param["DescribeClusters"] !== null) {
            $this->DescribeClusters = $param["DescribeClusters"];
        }

        if (array_key_exists("DescribeExecutors",$param) and $param["DescribeExecutors"] !== null) {
            $this->DescribeExecutors = $param["DescribeExecutors"];
        }

        if (array_key_exists("DescribeAdminUsers",$param) and $param["DescribeAdminUsers"] !== null) {
            $this->DescribeAdminUsers = $param["DescribeAdminUsers"];
        }

        if (array_key_exists("DescribeMemberCount",$param) and $param["DescribeMemberCount"] !== null) {
            $this->DescribeMemberCount = $param["DescribeMemberCount"];
        }

        if (array_key_exists("DescribeCreator",$param) and $param["DescribeCreator"] !== null) {
            $this->DescribeCreator = $param["DescribeCreator"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
