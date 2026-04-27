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

namespace TencentCloud\Edgezone\V20260401;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Edgezone\V20260401\Models as Models;

/**
 * @method Models\ApplyPublicIpsResponse ApplyPublicIps(Models\ApplyPublicIpsRequest $req) This API is used to submit a request for multiple IP addresses from the static IP pool to specify a public network instance (random allocation). Need to check user quota before applying.
This API is applicable only to public network instances with `RouteMode=static`. Calling this API for BGP/OSPF instances will return an error.
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create a physical machine instance. The system automatically allocates physical machine resources and completes installation. If the user is not in the current availability zone, the system automatically enables billing. It supports concurrent allocation of physical machine resources and async execution of network assignment and installation tasks.
 * @method Models\CreatePrivateNetworkInstanceResponse CreatePrivateNetworkInstance(Models\CreatePrivateNetworkInstanceRequest $req) Create a private network instance. A user can only create one private network instance in an availability zone. The subnet range is collectively determined by both parameters: Network (network number) and Mask (bit number of the mask). Network must be a valid network address from one of the three RFC 1918 private address ranges: 10.0.0.0/8, 172.16.0.0/12, or 192.168.0.0/16, and all host bits must be 0 (meaning the combination of Network and Mask cannot have any host bits set, such as 10.0.0.1/24 is illegal, use 10.0.0.0/24 instead). The maximum Mask is unified as 28, and the minimum is determined by the address range it belongs to: 10.x.x.x allows 8–28, 172.16.x.x allows 12–28, and 192.168.x.x allows 16–28.
 * @method Models\CreatePublicNetworkInstanceResponse CreatePublicNetworkInstance(Models\CreatePublicNetworkInstanceRequest $req) The user inputs the availability zone ID, public network instance name, network line, and routing mode to create a public network instance. A user can only create one public network instance in an availability zone.
Public network instances in **static** routing mode require users to proactively apply for and release public IP addresses.
Public network instances with routing mode set to **OSPF, BGP** automatically allocate public IP ranges when creating and auto release public IP ranges upon termination.
 * @method Models\DeletePrivateNetworkInstanceResponse DeletePrivateNetworkInstance(Models\DeletePrivateNetworkInstanceRequest $req) Delete a private network instance
 * @method Models\DeletePublicNetworkInstanceResponse DeletePublicNetworkInstance(Models\DeletePublicNetworkInstanceRequest $req) Modify public network instance info
 * @method Models\DescribeInstanceTypesResponse DescribeInstanceTypes(Models\DescribeInstanceTypesRequest $req) This API is used to query the model quota list under the account by availability zone dimensionality based on AppId. If a Zone is input, it returns the model quota under the designated availability zone. If not, it returns the model quota of all AZs under the account.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query physical machine instance list, support by instance ID, instance name, availability zone, instance status with conditional filtering, and support paging query.
 * @method Models\DescribePrivateNetworkInstancesResponse DescribePrivateNetworkInstances(Models\DescribePrivateNetworkInstancesRequest $req) Query private network instances, support through parameters such as private network instance ID, instance name, and availability zone id.
 * @method Models\DescribePublicIpsResponse DescribePublicIps(Models\DescribePublicIpsRequest $req) Query the public network Ip information of the user. For public network instances with routing mode set to Static, return all applied public network Ip information. For public network instances with routing mode set to Ospf and Bgp, return Ip range information directly.
 * @method Models\DescribePublicNetworkInstancesResponse DescribePublicNetworkInstances(Models\DescribePublicNetworkInstancesRequest $req) Query public network instance list, support conditional filtering by instance ID, instance name, availability zone, and support paging query.
 * @method Models\DescribeZoneDataResponse DescribeZoneData(Models\DescribeZoneDataRequest $req) Query statistics by metric name. Data is aggregated at 1-minute intervals.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) Cross-regional aggregate query returns the AZ list for the specified AppId in ALL configured regions. The local region directly performs a database query, while remote regions send HTTP requests to each region's DescribeAppZones API and merge the results.
 * @method Models\ModifyInstanceAttributeResponse ModifyInstanceAttribute(Models\ModifyInstanceAttributeRequest $req) This API is used to modify the attributes of a physical machine instance, supporting modification of the instance name and update of the public IP address (IPv4/IPv6). At least one of InstanceName and NewPublicIp must be input.
 * @method Models\ModifyPrivateNetworkInstanceResponse ModifyPrivateNetworkInstance(Models\ModifyPrivateNetworkInstanceRequest $req) Modify private network instance info
 * @method Models\ModifyPublicNetworkInstanceResponse ModifyPublicNetworkInstance(Models\ModifyPublicNetworkInstanceRequest $req) Modify public network instance info
 * @method Models\ReleasePublicIpResponse ReleasePublicIp(Models\ReleasePublicIpRequest $req) Batch release IPv4 addresses assigned to STATIC public network instances but not bound to physical servers
This API is applicable only to STATIC mode instances. The CIDR of BGP/OSPF instances is automatically returned during deletion with no need to manually release single IP addresses.
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) This API is used to terminate a physical machine instance and free up resources. It synchronously releases network resources (IP recycling) and updates status to terminating, while performing disk cleanup asynchronously in the background. It supports partially successful operations.
 */

class EdgezoneClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "edgezone.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "edgezone";

    /**
     * @var string
     */
    protected $version = "2026-04-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("edgezone")."\\"."V20260401\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
